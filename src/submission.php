<?php require "include_component.php"; ?>
<?php require "deadline.php"; ?>
<?php
$csv_data_dir = 'csv_data';
$user_data = 'data.csv';
$submission_data = 'submission.csv';
$upload_dir = 'uploads';

$file_max_size = 10 * 1024 * 1024; // 10 MB
$allowed_extensions = ['pdf'];

if (!file_exists($csv_data_dir)) {
	mkdir($csv_data_dir, 0777, true);
}
if (!file_exists($upload_dir)) {
	mkdir($upload_dir, 0777, true);
}

$nickname = trim($_POST['nickname'] ?? '');
$password = trim($_POST['password'] ?? '');

$success_message = '';
$error_messages = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	goto render;
}

date_default_timezone_set("Europe/Bratislava");
$current_time = new DateTime();
$deadline_time = Deadline::getDeadline();

if ($current_time < Deadline::deadline) {
	$error_messages[] = 'Termín na odovzdanie tejto úlohy uplynul.';
	goto render;
}

$file = $_FILES['file'] ?? null;
$nickname_exists = false;
$password_is_right = false;
if (empty($nickname) || empty($password)) {
	$error_messages[] = 'Prezývka a heslo sú povinné.';
}

if (empty($file['name'])) {
	$error_messages[] = 'Súbor je povinný.';
	goto render;
}

if ($file['error'] !== UPLOAD_ERR_OK) {
	$error_messages[] = 'Chyba pri nahrávaní súboru.';
}

if ($file['size'] > $file_max_size) {
	$error_messages[] = 'Súbor musí mať menej ako 10MB.';
}

if (file_exists("$csv_data_dir/$user_data")) {
	$user_data_file = fopen("$csv_data_dir/$user_data", 'r');

	while (($data = fgetcsv($user_data_file, 0, ',', '"', '\\')) !== false) {
		if (strcasecmp($data[2], $nickname) === 0) {
			$nickname_exists = true;

			if (strcasecmp($data[3], $password) === 0)
				$password_is_right = true;
			break;
		}
	}
	fclose($user_data_file);
}

if (!$nickname_exists || !$password_is_right) {
	$error_messages[] = 'Prezývka alebo heslo nie je správne.';
}

$file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if (!in_array($file_extension, $allowed_extensions)) {
	$error_messages[] = 'Povolené sú iba pdf súbory.';
}

if ($error_messages) {
	goto render;
}

$target_path = "$upload_dir/" . $nickname . "_" . date("Y-m-d_H-i-s") . ".$file_extension";

if (move_uploaded_file($file['tmp_name'], $target_path)) {
	$submission_data_file = fopen("$csv_data_dir/$submission_data", 'a');

	fputcsv($submission_data_file, [$nickname, $target_path, date('Y-m-d H-i-s')], ',', '"', '\\');
	fclose($submission_data_file);
	$success_message = 'Odovzdanie úlohy úspešné!';
}

render:
?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Odovzdávanie zadania</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output.css" rel="stylesheet">
	<link rel="icon" href="images/fmix.png">
</head>

<body>
<?php require './components/header_component.php'; ?>

<main class="main_">
	<section class="section flex justify-center content-center">
		<div class="content max-md:w-full md:w-2/3 h-fit flex flex-col content-center">
			<?php
			includeComponent("./components/notifications/warning_component.php",
				array("warning_message" => "Ako riešenie odovzdajte len jeden súbor. Za finálne riešenie sa bude brať len posledný odovzdaný súbor."));
			?>

			<?php
			includeComponent("./components/notifications/warning_component.php",
				array("warning_message" => "Termín aktuálneho zadania je " . Deadline::deadline . "."));
			?>

			<?php if ($success_message):
				includeComponent('./components/notifications/success_component.php',
					array("success_message" => $success_message));
			endif; ?>

			<?php if ($error_messages): ?>
				<?php foreach ($error_messages as $error_message):
					includeComponent('./components/notifications/error_component.php', array("error_message" => $error_message));
				endforeach; ?>
			<?php endif; ?>

			<form method="post" action="" enctype="multipart/form-data" class="w-full form_">
				<h2 class="text-2xl font-bold mb-4 text-center">Odovzdávanie zadania</h2>

				<div class="form_block">
					<label for="nickname" class="form_label">Prezývka</label>
					<input id="nickname" name="nickname" type="text" placeholder="Prezývka" class="form_input"
					       value="<?= htmlspecialchars($nickname ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="password" class="form_label">Heslo</label>
					<input id="password" name="password" type="password" placeholder="Heslo" class="form_input"
					       value="<?= htmlspecialchars($password ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="file" class="form_label">Vaše riešenie (PDF)</label>
					<input id="file" name="file" type="file" placeholder="Nahrať súbor" class="form_input" required>
				</div>

				<button type="submit" class="form_submit">Odovzdať</button>
			</form>

		</div>
	</section>

</main>

<?php includeComponent('components/footer_component.php'); ?>

<script src="scripts.js"></script>
</body>

</html>
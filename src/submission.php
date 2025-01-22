<?php
$csv_data_dir = 'csv_data';
$user_data = 'data.csv';
$submission_data = 'submission.csv';
$upload_dir = 'uploads';

$file_max_size = 10 * 1024 * 1024; // 10 MB
$allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf'];

if (!file_exists($csv_data_dir)) {
	mkdir($csv_data_dir, 0777, true);
}
if (!file_exists($upload_dir)) {
	mkdir($upload_dir, 0777, true);
}

$nickname = trim($_POST['nickname'] ?? '');

$success_message = '';
$error_messages = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	goto render;
}

$file = $_FILES['file'] ?? null;
$nickname_exists = false;

if (empty($nickname)) {
	array_push($error_messages, 'Prezývka je povinná.');
}
if (empty($file['name'])) {
	array_push($error_messages, 'Súbor je povinný.');
	goto render;
}
if ($file['error'] !== UPLOAD_ERR_OK) {
	array_push($error_messages, 'Chyba pri nahrávaní súboru.');
}
if ($file['size'] > $file_max_size) {
	array_push($error_messages, 'Súbor musí mať menej ako 10MB.');
}
if (file_exists("$csv_data_dir/$user_data")) {
	$user_data_file = fopen("$csv_data_dir/$user_data", 'r');

	while (($data = fgetcsv($user_data_file, 0, ',', '"', '\\')) !== false) {
		if (strcasecmp($data[2], $nickname) === 0) {
			$nickname_exists = true;
			break;
		}
	}
	fclose($user_data_file);
}
if (!$nickname_exists) {
	array_push($error_messages, 'Prezývka nie je zaregistrovaná.');
}
$file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if (!in_array($file_extension, $allowed_extensions)) {
	array_push($error_messages, 'Povolené sú iba súbory jpg, jpeg, png a pdf.');
}
if ($error_messages) {
	goto render;
}
$target_path = "$upload_dir/" . uniqid() . ".$file_extension";

if (move_uploaded_file($file['tmp_name'], $target_path)) {
	$submition_data_file = fopen("$csv_data_dir/$submission_data", 'a');

	fputcsv($submition_data_file, [$nickname, $target_path, date('Y-m-d H:i:s')], ',', '"', '\\');
	fclose($submition_data_file);
	$success_message = 'Odovzdanie úlohy úspešné!';
}

render:
?>
<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>Odovzdanie zadania</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5">
	<header class="p-3 mb-4">
		<div class="container">
			<a href="index.php" class="btn btn-secondary">Domov</a>
		</div>
	</header>

	<h1 class="text-center mb-4">Odovzdanie zadania</h1>

	<?php if ($success_message): ?>
		<div class="alert alert-success"> <?= htmlspecialchars($success_message) ?> </div>
	<?php endif; ?>

	<?php if ($error_messages): ?>
		<?php foreach ($error_messages as $error_message): ?>
			<div class="alert alert-danger">
				<?= htmlspecialchars($error_message) ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

	<form method="post" action="" enctype="multipart/form-data" class="shadow p-4 bg-light rounded">

		<div class="mb-3">
			<label for="nickname" class="form-label">Prezývka</label>
			<input type="text" id="nickname" name="nickname" placeholder="Prezývka" class="form-control"
			       value="<?= htmlspecialchars($nickname ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="file" class="form-label">Nahrať súbor</label>
			<input type="file" id="file" name="file" placeholder="Nahrať súbor" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-primary w-100">Odovzdať</button>

	</form>

	<footer class="text-center mt-5">
		<p>&copy; <?= date('Y') ?> Formulár na odovzdanie zadania. Všetky práva vyhradené. Made by Vladyslav Pyrch</p>
	</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
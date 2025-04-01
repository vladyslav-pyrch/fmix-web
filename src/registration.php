<?php require "include_component.php"; ?>
<?php
$csv_data_dir = 'csv_data';
$user_data = 'data.csv';

if (!file_exists($csv_data_dir)) {
	mkdir($csv_data_dir, 0777, true);
}

$firstname = trim($_POST['firstname'] ?? '');
$lastname = trim($_POST['lastname'] ?? '');
$nickname = trim($_POST['nickname'] ?? '');
$password = trim($_POST['password'] ?? '');
$password_repeat = trim($_POST['password_repeat'] ?? '');
$email = trim($_POST['email'] ?? '');
$school = trim($_POST['school'] ?? '');
$year_of_study = trim($_POST['year_of_study'] ?? '');
$accepted = isset($_POST['accepted']);

$nickname_pattern = '/^[a-zA-Z0-9._-]+$/';
$success_message = '';
$error_messages = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	goto render;
}

if (!$accepted) {
	$error_messages[] = 'Ak sa chcete zaregistrovať, musíte prijať podmienky a pravidla.';
}
if (empty($firstname) || empty($lastname) || empty($nickname) || empty($password) || empty($email) || empty($school) || empty($year_of_study)) {
	$error_messages[] = 'Všetky polia sú povinné.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error_messages[] = 'Neplatná e-mailová adresa.';
}
if (!in_array($year_of_study, ['1', '2', '3', '4'])) {
	$error_messages[] = 'Neplatný ročník štúdia.';
}
if (preg_match('/\s/', $firstname)) {
	$error_messages[] = 'Meno nemôže obsahovať medzery.';
}
if (preg_match('/\s/', $lastname)) {
	$error_messages[] = 'Priezvisko nemôže obsahovať medzery.';
}
if (!preg_match($nickname_pattern, $nickname)) {
	$error_messages[] = 'Prezývka môže obsahovať iba latinské písmená, číslice, podčiarkovník, bodku a spojovník.';
}
if (strcasecmp($password, $password_repeat) !== 0) {
	$error_messages[] = 'Heslá sa nezhodujú.';
}
if (file_exists("$csv_data_dir/$user_data")) {
	$file = fopen("$csv_data_dir/$user_data", 'r');

	while (($data = fgetcsv($file, 0, ',', '"', '\\')) !== false) {
		if (strcasecmp($data[2], $nickname) === 0) {
			$error_messages[] = 'Prezývka už existuje. Prosím, vyberte inú.';
		}
		if (strcasecmp($data[3], $email) === 0) {
			$error_messages[] = 'E-mail už existuje. Prosím, použite iný.';
		}
	}
	fclose($file);
}
if (!$error_messages) {
	$file = fopen("$csv_data_dir/$user_data", 'a');
	fputcsv($file, [$firstname, $lastname, $nickname, $password, $email, $school, $year_of_study], ',', '"', '\\');
	fclose($file);

	$success_message = 'Registrácia úspešná!';
}

render:
?>
<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Registrácia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output.css" rel="stylesheet">
	<link rel="icon" href="images/fmix.png">
</head>

<body>
<?php require './components/header_component.php'; ?>

<main class="main_ ">
	<section class="section flex justify-center content-center">
		<div class="content max-md:w-full md:w-2/3 h-fit flex flex-col content-center">
			<?php
			includeComponent("./components/notifications/warning_component.php",
				array("warning_message" => "Zapamätajte si svoju prezývku a heslo, budete ich potrebovať, aby ste mohli odvzdať svoju prácu!"));
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

			<form method="post" action="" class="w-full form_">
				<h2 class="text-2xl font-bold mb-4 text-center">Registrácia</h2>

				<div class="form_block">
					<label for="firstname" class="form_label">Meno</label>
					<input id="firstname" name="firstname" type="text" placeholder="Meno" class="form_input"
					       value="<?= htmlspecialchars($firstname ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="lastname" class="form_label">Priezvisko</label>
					<input id="lastname" name="lastname" type="text" placeholder="Priezvisko" class="form_input"
					       value="<?= htmlspecialchars($lastname ?? '') ?>" required>
				</div>

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
					<label for="password_repeat" class="form_label">Potvrďte heslo</label>
					<input id="password_repeat" name="password_repeat" type="password" placeholder="Potvrďte heslo" class="form_input"
					       value="<?= htmlspecialchars($password_repeat ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="email" class="form_label">Email</label>
					<input id="email" name="email" type="text" placeholder="Email" class="form_input"
					       value="<?= htmlspecialchars($email ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="school" class="form_label">Škola</label>
					<input id="school" name="school" type="text" placeholder="Škola" class="form_input"
					       value="<?= htmlspecialchars($school ?? '') ?>" required>
				</div>

				<div class="form_block">
					<label for="year_of_study" class="form_label">Navštevovaný ročník</label>
					<select type="number" id="year_of_study" name="year_of_study" placeholder="Navštevovaný ročník"
					        class="form_input" min="1" max="4" value="<?= htmlspecialchars($year_of_study ?? '') ?>" required>
						<option value="">--Select--</option>
						<option value="1" <?= $year_of_study == 1 ? 'selected' : '' ?>>1</option>
						<option value="2" <?= $year_of_study == 2 ? 'selected' : '' ?>>2</option>
						<option value="3" <?= $year_of_study == 3 ? 'selected' : '' ?>>3</option>
						<option value="4" <?= $year_of_study == 4 ? 'selected' : '' ?>>4</option>
					</select>
				</div>

				<div class="form_block">
					<input id="accepted" name="accepted" type="checkbox"  value="<?= htmlspecialchars($accepted ?? '') ?>" required>
					<label for="accepted" class="font-medium text-gray-700">Súhlasím s <a target="_blank" href="rules.php" class="link-text">Pravidlami seminára</a>, s ich obsahom som sa oboznámil/a a zaväzujem sa ich dodržiavať.</label>
				</div>

				<button type="submit" class="form_submit">Zaregistrovať sa</button>

			</form>

		</div>
	</section>
</main>

<?php includeComponent('components/footer_component.php'); ?>

<script src="scripts.js"></script>
</body>

</html>
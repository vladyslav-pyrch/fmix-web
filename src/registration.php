<?php
$csv_data_dir = 'csv_data';
$user_data = 'data.csv';

if (!file_exists($csv_data_dir)) {
	mkdir($csv_data_dir, 0777, true);
}

$firstname = trim($_POST['firstname'] ?? '');
$lastname = trim($_POST['lastname'] ?? '');
$nickname = trim($_POST['nickname'] ?? '');
$email = trim($_POST['email'] ?? '');
$school = trim($_POST['school'] ?? '');
$year_of_study = trim($_POST['year_of_study'] ?? '');

$success_message = '';
$error_messages = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	goto render;
}
if (empty($firstname) || empty($lastname) || empty($nickname) || empty($email) || empty($school) || empty($year_of_study)) {
	array_push($error_messages, 'Všetky polia sú povinné.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	array_push($error_messages, 'Neplatná e-mailová adresa.');
}
if (!in_array($year_of_study, ['1', '2', '3', '4'])) {
	array_push($error_messages, 'Neplatný ročník štúdia.');
}
if (file_exists("$csv_data_dir/$user_data")) {
	$file = fopen("$csv_data_dir/$user_data", 'r');

	while (($data = fgetcsv($file, 0, ',', '"', '\\')) !== false) {
		if (strcasecmp($data[2], $nickname) === 0) {
			array_push($error_messages, 'Prezývka už existuje. Prosím, vyberte inú.');
		}
		if (strcasecmp($data[3], $email) === 0) {
			array_push($error_messages, 'E-mail už existuje. Prosím, použite iný.');
		}
	}
	fclose($file);
}
if (!$error_messages) {
	$to = $email;
	$subject = "Test mail";
	$message = "Hello! This is a test email message. Here is your login info kokot:" . $nickname;
	$headers = "From: no_reply@fmix.sk";

	$sent = mail($to, $subject, $message, $headers);

	if (!$sent) {
		array_push($error_messages, 'Nepodarilo sa odoslať poštu. Skúste to ešte raz.');
	}
}

if (!$error_messages) {
	$file = fopen("$csv_data_dir/$user_data", 'a');
	fputcsv($file, [$firstname, $lastname, $nickname, $email, $school, $year_of_study], ',', '"', '\\');
	fclose($file);

	$success_message = 'Registrácia úspešná!';
}

render:
?>
<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>Registrácia</title>
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

	<h1 class="text-center mb-4">Registrácia</h1>

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

	<form method="post" action="" class="shadow p-4 bg-light rounded">
		<div class="mb-3">
			<label for="firstname" class="form-label">Meno</label>
			<input type="text" id="firstname" name="firstname" placeholder="Meno" class="form-control"
			       value="<?= htmlspecialchars($firstname ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="lastname" class="form-label">Priezvisko</label>
			<input type="text" id="lastname" name="lastname" placeholder="Priezvisko" class="form-control"
			       value="<?= htmlspecialchars($lastname ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="nickname" class="form-label">Prezývka</label>
			<input type="text" id="nickname" name="nickname" placeholder="Prezývka" class="form-control"
			       value="<?= htmlspecialchars($nickname ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="email" class="form-label">Mail</label>
			<input type="text" id="email" name="email" placeholder="Mail" class="form-control"
			       value="<?= htmlspecialchars($email ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="school" class="form-label">Škola</label>
			<input type="text" id="school" name="school" placeholder="Škola" class="form-control"
			       value="<?= htmlspecialchars($school ?? '') ?>" required>
		</div>

		<div class="mb-3">
			<label for="year_of_study" class="form-label">Navštevovaný ročník</label>
			<select type="number" id="year_of_study" name="year_of_study" placeholder="Navštevovaný ročník"
			        class="form-control" min="1" max="4" value="<?= htmlspecialchars($year_of_study ?? '') ?>" required>
				<option value="">--Select--</option>
				<option value="1" <?= $year_of_study == 1 ? 'selected' : '' ?>>1</option>
				<option value="2" <?= $year_of_study == 2 ? 'selected' : '' ?>>2</option>
				<option value="3" <?= $year_of_study == 3 ? 'selected' : '' ?>>3</option>
				<option value="4" <?= $year_of_study == 4 ? 'selected' : '' ?>>4</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary w-100">Zaregistrovať sa</button>

	</form>

	<footer class="text-center mt-5">
		<p>&copy; <?= date('Y') ?> Registračný formulár. Všetky práva vyhradené. Made by Vladyslav Pyrch</p>
	</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>
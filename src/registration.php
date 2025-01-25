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
$discord_nickname = trim($_POST['discord_nickname'] ?? '');
$school = trim($_POST['school'] ?? '');
$year_of_study = trim($_POST['year_of_study'] ?? '');

$nickname_pattern = '/^[a-zA-Z0-9._-]+$/';
$success_message = '';
$error_messages = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	goto render;
}
if (empty($firstname) || empty($lastname) || empty($nickname) || empty($email) || empty($discord_nickname) || empty($school) || empty($year_of_study)) {
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
if (preg_match('/\s/', $discord_nickname)) {
	$error_messages[] = 'Discord nickname nemôže obsahovať medzery.';
}
if (!preg_match($nickname_pattern, $nickname)) {
	$error_messages[] = 'Prezývka môže obsahovať iba latinské písmená, číslice, podčiarkovník, bodku a spojovník.';
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
	fputcsv($file, [$firstname, $lastname, $nickname, $discord_nickname, $email, $school, $year_of_study], ',', '"', '\\');
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
	<link rel="icon" href="images/FMIX2.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5">
	<header class="p-3 mb-4">
		<div class="container">
			<a href="/" class="btn btn-secondary">Domov</a>
		</div>
	</header>

	<h1 class="text-center mb-4">Registrácia</h1>

	<div class="alert alert-warning" role="alert">
		Zapamätajte si svoju prezývku, budete ju potrebovať, aby ste mohli odvzdať svoju prácu!
	</div>

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
			<label for="discord_nickname" class="form-label">Discord</label>
			<input type="text" id="discord_nickname" name="discord_nickname" placeholder="Discord" class="form-control"
			       value="<?= htmlspecialchars($discord_nickname ?? '') ?>" required>
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
		<p>&copy; <?= date('Y') ?>  FMIX seminár web stránka. Všetky práva vyhradené.</p>
	</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
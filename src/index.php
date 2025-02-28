<?php require "include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output.css" rel="stylesheet">
	<link rel="icon" href="images/fmix.png">
</head>

<body>
<?php includeComponent('./components/header_component.php'); ?>

<main class="main_">
	<section id="home" class="section max-md:hidden">
		<div class="w-full pt-2">
			<div class="w-full"><img class="w-full" src="images/fmix_fullname.png" alt="full name"></div>
		</div>
	</section>

	<?php includeComponent("./components/sections/about_us_component.php") ?>

	<?php includeComponent("./components/sections/rules_component.php") ?>

	<?php includeComponent("./components/sections/gallery_component.php") ?>
</main>

<?php includeComponent('components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
<?php require "./include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - team</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output.css" rel="stylesheet">
	<link rel="icon" href="images/fmix.png">
</head>

<body>
<?php includeComponent('./components/header_component.php'); ?>

<main class="main_ items-center">
	<section id="home" class="section max-md:hidden">
		<div class="w-full pt-2">
			<div class="w-full">
				<img class="w-full" src="images/fmix_fullname.png" alt="full name">
			</div>
		</div>
	</section>
	<section id="team" class="section mb-2.5">
		<div id="team">
			<div class="w-full">
				<div class="w-full px-3 py-2 mb-3 flex justify-center content-center items-center text-4xl font-thin">
					<h1>Náš tím</h1>
				</div>
				<div class="content grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-4">
					<div class="h-auto max-w-full text-center p4">
						<img class="w-32 h-32  mx-auto" src="images/user.png" alt="Mgr. Jozef Kollár, PhD.">
						<h3 class="text-lg font-semibold mt-4">Mgr. Jozef Kollár, PhD.</h3>
						<p class="text-gray-600 mt-2">Zodpovedný pedagogický zamestnanec</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Vladimíra Balohová">
						<h3 class="text-lg font-semibold mt-4">Vladimíra Balohová </h3>
						<p class="text-gray-600 mt-2">Vedúca seminára</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Marco Dzurilla">
						<h3 class="text-lg font-semibold mt-4">Marco Dzurilla</h3>
						<p class="text-gray-600 mt-2">Tajomník seminára</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Natália Žilová">
						<h3 class="text-lg font-semibold mt-4">Natália Žilová</h3>
						<p class="text-gray-600 mt-2">Vedúca úseku matematiky</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Adrián Lutišan">
						<h3 class="text-lg font-semibold mt-4">Adrián Lutišan</h3>
						<p class="text-gray-600 mt-2">Vedúci úseku informatiky</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Rudolf Tisoň">
						<h3 class="text-lg font-semibold mt-4">Rudolf Tisoň</h3>
						<p class="text-gray-600 mt-2">Ľudské zdroje</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Marcel Takáč">
						<h3 class="text-lg font-semibold mt-4">Marcel Takáč </h3>
						<p class="text-gray-600 mt-2">Správca komunikácie</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Vladyslav Pyrch">
						<h3 class="text-lg font-semibold mt-4">Vladyslav Pyrch</h3>
						<p class="text-gray-600 mt-2">Správca webového sídla</p>
					</div>
					<div class="h-auto max-w-full rounded-lg text-center p-4">
						<img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Iryna Tokmyna">
						<h3 class="text-lg font-semibold mt-4">Iryna Tokmyna</h3>
						<p class="text-gray-600 mt-2">Vedúca PR</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php includeComponent('./components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
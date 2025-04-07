<?php require "./include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Zadania</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output.css" rel="stylesheet">
	<link rel="icon" href="images/fmix.png">
</head>

<body>
<?php includeComponent('./components/header_component.php'); ?>

<main class="main_ items-center">
	<section id="home" class="section max-md:hidden">
		<div class="w-full pt-2">
			<div class="w-full"><img class="w-full" src="images/fmix_fullname.png" alt="full name"></div>
		</div>
	</section>

	<h2 class="px-6 pb-4 pt-1.5 font-thin text-4xl">Zadania</h2>
	<table class="table-auto w-10/12 border-collapse text-sm">
		<thead>
		<tr>
			<th class="px-6 py-3 text-left">Zadanie</th>
			<th class="px-6 py-3 text-center">Vzorové riešenie</th>
			<th class="px-6 py-3 text-right">Termín odovzdania</th>
		</tr>
		</thead>
		<tbody>
		<tr class="border-t border-black border-opacity-50">
			<td class="px-6 py-3 text-left">
				<a target="_blank" class="link-text" href="assignments/2025-L-01.pdf">
					Zadania 1. kola
				</a>
			</td>
			<td class="px-6 py-3 text-center">
				<a target="_blank" class="link-text" href="assignment_solutions/2025-L-01-3.pdf">
					Riešenie zadania 1. kola.
				</a>
			</td>
			<td class="px-6 py-3 text-right">7.4.2025</td>
		</tr>
		<tr class="border-t border-black border-opacity-50">
			<td class="px-6 py-3 text-left">
				<a target="_blank" class="link-text" href="assignments/2025-L-02.pdf">
					Zadania 2. kola
				</a>
			</td>
			<td class="px-6 py-3 text-center">Po ukončení kola</td>
			<td class="px-6 py-3 text-right">30.4.2025</td>
		</tr>
		</tbody>
		<caption class="text-right">
			Riešenia musia byť odovzdané do 24:00.
			<br>
			Úspešní riešitelia (aspoň 70% bodov) sa budú vyhodnocovať, z mimoriadnych dôvodov, už po 2. kole.
		</caption>
	</table>
</main>

<?php includeComponent('./components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
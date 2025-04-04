<?php require "./include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Výsledky</title>
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
	
	<h2 class="px-6 pb-4 pt-1.5 font-thin text-4xl">Výsledky</h2>
	<table class="table-auto w-10/12 border-collapse text-sm">
        <thead>
        <tr>
            <th class="px-6 py-3 text-left">Meno a priezvisko</th>
            <th class="px-6 py-3 text-center">Škola</th>
            <th class="px-6 py-3 text-right">Výsledok</th>
        </tr>
        </thead>
        <tbody>
			<tr class="border-t border-black border-opacity-50">
			</tr>
        </tbody>
        <caption class="text-left">(Výsledky 1. kola)</caption>
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
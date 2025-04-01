<?php require "include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Kontakt</title>
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
    <h2 class="px-6 pb-4 pt-1.5 font-thin text-4xl">Kontakt</h2>
    <div class="px-6 pb-10 text-lg">
        <p class="mb-4">Seminár FMIX organizujú študenti Fakulty elektrotechniky a informatiky Slovenskej technickej univerzity v Bratislave pod záštitou Ústavu informatiky a matematiky.</p>
        
        <p class="mb-4">Ak máte akékoľvek otázky, návrhy alebo pripomienky, neváhajte nás kontaktovať e-mailom na 
        <a class="link-text text-black" target="_blank" href="mailto:fmix@stuba.sk">
			fmix@stuba.sk
		</a>. 
        Radi vám pomôžeme s akýmikoľvek nejasnosťami ohľadom úloh, hodnotenia či organizácie seminára. Odpovieme vám čo najskôr, zvyčajne v priebehu niekoľkých dní.</p>
        
        <p class="font-semibold mb-2">Korešpondenčná adresa:</p>
        <p>
            Fakulta elektrotechniky a informatiky STU<br>
            Ústav informatiky a matematiky - FMIX<br>
            Ilkovičova 3, 812 19 Bratislava<br>
            Slovenská republika
        </p>
        <p class="mt-4">Tešíme sa na vašu účasť a veríme, že FMIX bude pre vás inšpirujúcim a obohacujúcim zážitkom!</p>
    </div>
</main>

<?php includeComponent('components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
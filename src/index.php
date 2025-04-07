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
			<div class="w-full">
				<img class="w-full" src="images/fmix_fullname.png" alt="full name">
			</div>
		</div>
	</section>

	<div class="p-10 pt-10 items-center lg:gap-8 md:px-10 md:pb-15">
		<div class="float-right mr-5 max-md:w-full md:w-1/2 mb-3 md:mb-auto">
			<img class="object-cover w-xl md:w-full rounded-xl" src="images/FEI_DOD-4.png" alt="dod image">
		</div>
		<h3 class="font-bold">Čo je FMIX?</h3>
		<p class="pb-2 pl-2">
			<b>F</b>eikársky <b>M</b>atematicko-<b>I</b>nformaticko-<b>K</b>ryptografický seminár ponúka priestor na rozvoj
			matematických a technických zručností. Je určený pre študentov stredných škôl a gymnázií, ktorí radi objavujú a
			riešia výzvy
			z oblasti informatiky, matematiky a kryptografie. Našim cieľom je podporiť talentovaných mladých ľudí a inšpirovať
			ich na ceste k budúcemu akademickému a profesionálnemu rastu.
		</p>

		<h3 class="font-bold">Ako seminár funguje?</h3>
		<p class="pb-2 pl-2">
			Seminár prebieha počas letného semestra akademického roka a je rozdelený do troch kôl. Každé kolo pozostáva zo 6
			úloh
			(4 matematických, 1 informatickej a 1 kryptografickej). Riešitelia majú na ich vypracovanie stanovený čas a ich
			riešenia
			hodnotí odborná komisia.
		</p>
		<p class="pb-2 pl-2">
			Na konci seminára pozývame najúspešnejších riešiteľov na sústredenie, kde sa môžu stretnúť s ostatnými
			talentovanými
			študentmi, zúčastniť sa zaujímavých workshopov a zažiť nezabudnuteľnú atmosféru plnú zábavy a nových poznatkov.
		</p>

		<h3 class="font-bold pl-2">Prečo sa zapojiť?</h3>
		<ul class="pl-2 list-disc list-inside">
			<li><b>Zábava a výzvy -</b> Čakajú ťa úlohy, ktoré ťa potrápia, ale aj nadchnú.</li>
			<li><b>Cenné skúsenosti -</b> Získaš vedomosti, ktoré ti pomôžu na akademickej aj profesionálnej ceste.</li>
			<li><b>Komunita a networking -</b> Spoznáš ľudí s podobnými záujmami, s ktorými môžeš zdieľať nadšenie pre vedu a
				technológie.
			</li>
			<li><b>Sústredenie -</b> Najlepší riešitelia budú odmenení pozvánkou na sústredenie plné workshopov, prednášok a
				nezabudnuteľných zážitkov.
			</li>
		</ul>
	</div>
	<div class="flex lg:flex-row max-lg:flex-col-reverse w-full box-border p-10 pt-7 lg:gap-8 md:px-10 md:pb-15">
		<div class=" lg:w-1/2 max-lg:mt-10">
			<h3 class="font-bold pl-2">Ako sa zapojiť do FMIX-u?</h3>
			<ul class="pl-2 list-decimal list-inside">
				<li><b>Prečítaj si pravidlá –</b> Zistíš, ako seminár funguje a čo môžeš očakávať.</li>
				<li><b>Pozri si aktuálne úlohy –</b> Zadania nájdeš na stránke seminára.</li>
				<li><b>Rieš úlohy –</b> Skús sa popasovať s matematikou, informatikou a kryptografiou.</li>
				<li><b>Odovzdaj riešenia –</b> Pri odovzdávaní jednoducho uvedieš svoju prezívku a heslo.</li>
				<li><b>Sleduj výsledky –</b> Po vyhodnotení sa dozvieš, ako sa ti darilo.</li>
			</ul>
		</div>

		<div class=" lg:w-1/2">
			<h3 class="font-bold pl-2">Čo sú sústredenia?</h3>
			<p class="pb-2 pl-2">
				Najlepší riešitelia FMIX-u sa môžu tešiť na sústredenie – viacdňové
				stretnutie plné prednášok, workshopov a zábavných aktivít. Okrem riešenia
				zaujímavých úloh tu spoznáš nových ľudí, zažiješ súťaže, hry a neformálne
				diskusie s organizátormi.
				<br>
				Sústredenie je skvelá príležitosť, ako sa dozvedieť niečo nové, stretnúť
				rovnako nadšených ľudí a užiť si príjemnú atmosféru mimo školy.
			</p>
		</div>
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
<?php require "./include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Pravidlá</title>
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
	
	<h2 class="px-10 pb-4 pt-1.5 font-thin text-4xl">Pravidlá</h2>
	<div id="rules_content" class="content px-10 pt-4 pb-1.5">
		<div>
			<span class="font-bold text-lg">Preambula</span>
			<br>
			<span>
			Predmetom týchto pravidiel Feikárskeho Matematicko-Informaticko-Kryptografického seminára <b>FMIX</b> 
			(ďalej len „Seminár“ v príslušnom gramatickom tvare) je stanovenie podmienok, pravidiel a kritérií, 
			ktoré musí účastník splniť, aby sa stal úspešným riešiteľom.
			</span>
		</div>
		<br>
		<div class="pl-3.5">
			<ol class="list-roman mb-5">
				<li>
					<span class="font-bold text-lg">Vyhlasovateľ seminára</span>
					<ol>
						<li>
							<span>
								Vyhlasovateľom tohto seminára je Slovenská technická univerzita v Bratislave, Fakulta elektrotechniky
								a informatiky, Ústav informatiky a matematiky, Ilkovičova 3, 841 04 Bratislava, IČO: 00 397 687
								(ďalej len „Vyhlasovateľ“ v príslušnom gramatickom tvare).
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Cieľ a trvanie seminára</span>
					<ol>
						<li>
							<span>
							Cieľom seminára je podpora a rozvoj talentovaných študentov v oblastiach 
							matematiky, informačných technológií a kryptografie, ako aj formovať budúcu 
							generáciu študentov FEI STU a technicky zdatných odborníkov.
							</span>
						</li>
						<li>
							<span>
								Seminár bude prebiehať počas letného semestra, príslušného akademického roka
								(ďalej len „Doba trvania seminára“ v príslušnom gramatickom tvare).
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Osoby oprávnené zúčastniť sa</span>
					<ol>
						<li>
							<span>Seminára sa môžu zúčastniť:</span>
							<ol class="list-alpha">
								<li>
									<span>študenti stredných škôl alebo,</span>
								</li>
								<li>
									<span>študenti štvorročných, päťročných alebo osemročných gymnázií,</span>
								</li>
								<li>
									<span>a študenti ktorí sú mladší než 20 rokov.</span>
								</li>
							</ol>
						</li>
						<li>
							<span>
								Účasť na seminári je podmienená registráciou.
							</span>
						</li>
						<li>
							<span>
							Zo seminára bude vylúčený študent, ktorý sa zúčastňuje v rozpore s pravidlami 
							seminára alebo inak neoprávnene zasahuje do jeho priebehu.
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Kategórie úloh</span>
					<ol>
						<li>
							<span>Každé kolo seminára sa skladá zo 4 úloh z matematiky, 1 úlohy z informatiky a 1 úlohy z kryptografie.</span>
						</li>
						<li>
							Každá úloha má dve verzie A a B, pričom študenti jednotlivých ročníkov môžu riešiť iba verziu úlohy z určenej kategórie.
						</li>
						<li>
							<span>Ročníky sa určujú podľa stredoškolského 4-ročného systému, t. j. nasledovne: </span>
							<ul>
								<li>
									<span class="font-bold">4.ročník  =  Maturitný ročník</span>
								</li>
								<li>
									<span class="font-bold">3.ročník  =  Maturitný ročník – 1 r.</span>
								</li>
								<li>
									<span class="font-bold">2.ročník  =  Maturitný ročník – 2 r.</span>
								</li>
								<li>
									<span class="font-bold">1.ročník  =  Maturitný ročník – 3 r.</span>
								</li>
							</ul>
						</li>
						<br>
						<li class="overflow-y-auto">
							<table class="table-auto w-full border-collapse text-sm ">
								<thead>
								<tr class="bg-gray-100">
									<th class="px-6 py-3 border-b border-black"></th>
									<th class="px-6 py-3 border-b border-l border-black opacity-80" colspan="4">Matematika</th>
									<th class="px-6 py-3 border-b border-l border-black opacity-80">INF</th>
									<th class="px-6 py-3 border-b border-l border-black opacity-80">KRYP</th>
								</tr>
								<tr>
									<th class="px-6 py-3 border-b border-black"></th>
									<th class="px-6 py-3 border-b border-black">1</th>
									<th class="px-6 py-3 border-b border-black">2</th>
									<th class="px-6 py-3 border-b border-black">3</th>
									<th class="px-6 py-3 border-b border-black">4</th>
									<th class="px-6 py-3 border-b border-black">5</th>
									<th class="px-6 py-3 border-b border-black">6</th>
								</tr>
								</thead>
								<tbody>
								<tr class="bg-gray-100">
									<th class="px-6 py-3 border-b border-black">4. ročník</th>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
								</tr>
								<tr class="">
									<th class="px-6 py-3 border-b border-black">3. ročník</th>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
								</tr>
								<tr class="bg-gray-100">
									<th class="px-6 py-3 border-b border-black">2. ročník</th>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">B</td>
								</tr>
								<tr class="">
									<th class="px-6 py-3 border-b border-black">1. ročník</th>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
									<td class="px-6 py-3 border-b border-black">A / B</td>
								</tr>
								</tbody>
							</table>
							<br>
						</li>
						<li>
							<span>Ak účastník má možnosť riešiť úlohy z oboch kategórií, započíta 
								sa mu riešenie s vyšším bodovým ohodnotením.
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Zadávanie a odovzdávanie riešení úloh</span>
					<ol>
						<li>
							<span>
								Úlohy budú zverejnené na oficiálnej stránke seminára vždy k určitému dátumu,
								pričom účastníci budú mať na ich vyriešenie a odovzdanie stanovený čas.
							</span>
						</li>
						<li>
							<span>
								V hlavičke riešení musí byť čitateľne – tlačeným písmom uvedené: meno,
								priezvisko a špecifický identifikátor / zvolená prezývka riešiteľa.
							</span>
						</li>
						<li>
							<span>Riešenia je možné odovzdať: </span>
							<ol class="list-alpha">
								<li>
									<span>
										Elektronicky vo formáte .pdf na webovej stránke seminára, 
										v súlade s odsekom 4 a 5 tohto článku.
									</span>
								</li>
								<li>
									<span>
										Písomne na adresu: Fakulta elektrotechniky a informatiky,
										Ústav informatiky a matematiky, Ilkovičova 3, 841 04 Bratislava,<br> 
										s poznámkou <b>„FMIX“</b> na prednej strane obálky.
									</span>
								</li>
							</ol>
						</li>
						<li>
							<span>
							Elektronické riešenia sú akceptované písané na počítači a uložené vo formáte PDF, 
							prípadne písané ručne, naskenované a uložené vo formáte PDF. 
							</span>
						</li>
						<li>
							<span>
							Elektronicky odovzdané riešenia musia byť uložené len v jednom PDF súbore. V prípade 
							viacerých odovzdaných súborov sa za finálne riešenie považuje posledná verzia, 
							pričom predchádzajúce súbory budú ignorované.
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Hodnotenie riešení</span>
					<ol>
						<li>
							<span>
								Riešenia budú hodnotené na základe celkového postupu k riešeniu, zdôvodnenia 
								ako aj správnosti riešenia.
							</span>
						</li>
						<li>
							<span>
								Riešenie musí byť explicitné (pochopiteľné samo o sebe bez ďalších zdrojov) a 
								čitateľné. V prípade, že riešenie alebo jeho časť nebude spĺňať tieto parametre, 
								vyhlasovateľ si vyhradzuje právo neudeliť primeraný počet bodov.
							</span>
						</li>
						<li>
							<span>
								Každá úloha má vopred stanovený počet bodov, ktorý môže byť udelený na základe 
								čiastočného alebo úplného riešenia úlohy. 
							</span>
						</li>
						<li>
							<span>
							Opravené, obodované a okomentované riešenia budú zaslané na e-mailovú adresu 
							uvedenú pri registrácii. Okrem toho bude skóre zverejnené v tzv. výsledkovej listine.
							</span>
						</li>
						<li>
							<span>
								V prípade, že sa účastník nestotožňuje s hodnotením úlohy, môže do 10 dní od zverejnenia 
								výsledkov podať sťažnosť na e-mailovú adresu:
								<a target="_blank" class="link-text" href="mailto:fmix@stuba.sk">fmix@stuba.sk</a>.
								Sťažnosť musí obsahovať podrobné zdôvodnenie a prípadné alternatívne riešenie.
							</span>
						</li>
						<li>
							<span>
								Účastníci sú povinní riešiť úlohy individuálne bez pomoci iných osôb, nástrojov a iných softvérových 
								riešení, ktoré by neprimerane uľahčili ich riešenie. Výnimkou sú len tie nástroje, ktoré sú explicitne 
								povolené v zadaniach úloh.
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Výhra a odovzdanie výhry</span>
					<ol>
						<li>
							<span>
								Po skončení seminára sa uskutoční sústredenie pre najúspešnejších riešiteľov za jednotlivé ročníky.
							</span>
						</li>
						<li>
							<span>
								Na sústredenie bude pozvaných 30 najúspešnejších riešiteľov, pričom ostatní riešitelia môžu byť pozvaní 
								ako náhradníci.
								Vyhlasovateľ si taktiež vyhradzuje právo pozvať aj riešiteľov, ktorí sa umiestnili na nižších priečkach.
							</span>
						</li>
						<li>
							<span>
								Riešitelia <b>3.</b> a <b>4.</b> ročníka, ktorí získali aspoň 70 % z celkového bodového hodnotenia, 
								dostanú za svoje výsledky diplom úspešného riešiteľa od riaditeľa ÚIM.
								Tento diplom úspešného riešiteľa je v zmysle podmienok prijatia na
								Bc. štúdium - odbor "Aplikovaná informatika", akceptovaný pod kategóriou “súťaže organizované STU”.
								(Viac na: <a target="_blank" class="link-text"
								            href="https://www.fei.stuba.sk/ako-zacat-studovat/podmienky-prijatia/bc.-studium.html?page_id=3759#hodnotenie-sutazi">
									https://www.fei.stuba.sk/ako-zacat-studovat/podmienky-prijatia/bc.-studium.html?page_id=3759#hodnotenie-sutazi</a>)
								<br>Bodové hodnotenie súťaže je dostatočné na odpustenie prijímacieho konania.
							</span>
						</li>
						<li>
							<span>
								Výhra spojená so seminárom sa podľa § 4 ods. 5 písm. e) zákona č. 30/2019 Z. z. o hazardných hrách nepovažuje 
								za výhru z hazardnej hry.
							</span>
						</li>
					</ol>
				</li>
				<li>
					<span class="font-bold text-lg">Záverečné ustanovenia</span>
					<ol>
						<li>
							<span>
								Vyhlasovateľ si vyhradzuje právo seminár skrátiť, prerušiť, odvolať alebo zmeniť pravidlá, ak to bude 
								potrebné z dôvodu narušenia priebehu seminára, bezpečnosti, čestnosti alebo technických problémov.	
							</span>
						</li>
						<li>
							<span>
								Vyhlasovateľ nenesie zodpovednosť za technické problémy alebo poruchy, ku ktorým by mohlo dôjsť na 
								počítači či inom zariadení účastníka alebo akejkoľvek inej osoby v súvislosti s účasťou na seminári.
							</span>
						</li>
						<li>
							<span>
								Vyhlasovateľ si vyhradzuje právo kontrolovať podmienky účasti v seminári a rozhodovať o sporoch 
								súvisiacich so seminárom s konečnou platnosťou, vrátane práva vylúčiť účastníkov za porušenie pravidiel.
							</span>
						</li>
						<li>
							<span>
								Účasťou v seminári a registráciou účastník vyjadruje súhlas s týmito pravidlami a so spracovaním 
								svojich osobných údajov v rozsahu nevyhnutnom na účasť v seminári. Organizátor sa zaväzuje 
								spracovávať osobné údaje v súlade s platnými právnymi predpismi.
							</span>
						</li>
						<li>
							<span>
								Všetky zmeny pravidiel nadobúdajú účinnosť dňom ich zverejnenia na webovej stránke vyhlasovateľa.
							</span>
						</li>
						<li>
							<span>
								Aktuálna verzia pravidiel bola schválená dňa 25.3.2025, s účinnosťou od 25.3.2025.
							</span>
						</li>
					</ol>
				</li>
			</ol>
		</div>
	</div>
</main>

<?php includeComponent('./components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
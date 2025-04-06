<header class="header_ flex-wrap justify-between items-center px-4">
	<div class="flex items-center w-full md:w-auto">
		<div class="h-12 mr-2">
			<a href="./index.php"><img class="h-full object-contain" src="images/stu_fei_uim.png" alt="STU FEI logo"></a>
		</div>

		<!-- Mobile Menu Button (hidden on larger screens, visible on mobile) -->
		<button id="menuToggle" class="md:hidden text-gray-700 focus:outline-none ml-auto">
			<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
			</svg>
		</button>
	</div>

	<nav id="menu" class="hidden md:flex md:items-center md:justify-between w-full md:w-auto px-4">
		<div class="relative">
			<button id="dropdownButton" class="flex items-center px-4 py-2 rounded-md focus:outline-none mx-auto md:mx-0">
				O seminári
				<svg class="-mr-1 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
				</svg>
			</button>

			<div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-violet-200 rounded-md shadow-lg hidden">
				<a href="index.php" class="block px-4 py-2 text-gray-800 hover:bg-violet-300">O nás</a>
				<a href="rules.php" class="block px-4 py-2 text-gray-800 hover:bg-violet-300">Pravidlá</a>
				<a href="team.php" class="block px-4 py-2 text-gray-800 hover:bg-violet-300">Organizátori</a>
				<a href="contact.php" class="block px-4 py-2 text-gray-800 hover:bg-violet-300">Kontakt</a>
			</div>
		</div>

		<a href="assignments.php" onclick="scrollToAndToggleOn('assignments')" class="link-button px-4 py-2">
			<span>Zadania</span>
		</a>
		<a href="assignments_results.php" onclick="scrollToAndToggleOn('assignment-results')" class="link-button px-4 py-2">
			<span>Výsledky</span>
		</a>
		<a href="gallery.php" class="link-button px-4 py-2">
			<span>Galéria</span>
		</a>
		<a href="registration.php" class="link-button px-4 py-2">
			<span>Registrácia</span>
		</a>
		<a href="submission.php" class="link-button px-4 py-2">
			<span>Odovzdávanie</span>
		</a>
	</nav>
</header>
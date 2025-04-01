<?php require "include_component.php"; ?>

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

<main class="main_">
    <section id="home" class="section max-md:hidden">
        <div class="w-full pt-2">
            <div class="w-full">
                <img class="w-full" src="images/fmix_fullname.png" alt="full name">
            </div>
        </div>
    </section>
    <section id="team" class="section py-15">
        <h2 class="text-center text-2xl font-bold mb-6">Náš tím</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Ján Novák">
                <h3 class="text-lg font-semibold mt-4">Ján Novák</h3>
                <p class="text-gray-600 mt-2">CEO</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Petra Malá">
                <h3 class="text-lg font-semibold mt-4">Petra Malá</h3>
                <p class="text-gray-600 mt-2">Marketing Manager</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Marek Kováč">
                <h3 class="text-lg font-semibold mt-4">Marek Kováč</h3>
                <p class="text-gray-600 mt-2">Lead Developer</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Ján Novák">
                <h3 class="text-lg font-semibold mt-4">Ján Novák</h3>
                <p class="text-gray-600 mt-2">CEO</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Petra Malá">
                <h3 class="text-lg font-semibold mt-4">Petra Malá</h3>
                <p class="text-gray-600 mt-2">Marketing Manager</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Marek Kováč">
                <h3 class="text-lg font-semibold mt-4">Marek Kováč</h3>
                <p class="text-gray-600 mt-2">Lead Developer</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Ján Novák">
                <h3 class="text-lg font-semibold mt-4">Ján Novák</h3>
                <p class="text-gray-600 mt-2">CEO</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Petra Malá">
                <h3 class="text-lg font-semibold mt-4">Petra Malá</h3>
                <p class="text-gray-600 mt-2">Marketing Manager</p>
            </div>
            <div class="overflow-hidden max-w-xs text-center p-4">
                <img class="w-32 h-32 rounded-full mx-auto" src="images/user.png" alt="Marek Kováč">
                <h3 class="text-lg font-semibold mt-4">Marek Kováč</h3>
                <p class="text-gray-600 mt-2">Lead Developer</p>
            </div>
        </div>
    </section>
</main>

<?php includeComponent('components/footer_component.php'); ?>

<script src="scripts.js"></script>
<script>
	window.onload = checkUrlHash;
	window.addEventListener('hashchange', checkUrlHash);
</script>
</body>

</html>
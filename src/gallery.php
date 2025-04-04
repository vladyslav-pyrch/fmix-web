<?php require "./include_component.php"; ?>

<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="UTF-8">
	<title>FMIX - Galéria</title>
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
    <section id="gallery" class="section mb-2.5">
        <div id="gallery_content">
            <div class="gallery_section">
                <div class="header">
                    <h1>Letné sústredenie 2024</h1>
                </div>
                <div class="content grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/burns.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/sousages.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/grill.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/playing.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg shadow-lg shadow-gray-400" src="gallery/image2.jpg" alt="">
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
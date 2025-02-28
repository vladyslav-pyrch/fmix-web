<?php if (isset($error_message)) : ?>
<div class="bg-red-600 notification">
	<svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
		<path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-12.728 12.728m0-12.728l12.728 12.728"></path>
	</svg>
	<span><?= htmlspecialchars($error_message) ?></span>
</div>
<?php endif; ?>
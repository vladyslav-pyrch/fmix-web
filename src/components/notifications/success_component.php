<?php if (isset($success_message)): ?>
<div class="bg-green-600 notification">
    <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span><?= htmlspecialchars($success_message) ?></span>
</div>
<?php endif; ?>
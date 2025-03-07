<?php if(isset($warning_message)): ?>
<div class="bg-orange-600 notification">
    <svg class="h-6 w-6 mr-3 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.29 3.86L1.82 12.32a2 2 0 000 2.83l8.47 8.47a2 2 0 002.83 0l8.47-8.47a2 2 0 000-2.83l-8.47-8.47a2 2 0 00-2.83 0z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01"></path>
    </svg>
    <span>
        <?= htmlspecialchars($warning_message) ?>
    </span>
</div>
<?php endif; ?>
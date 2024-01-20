<h1>Главная страница</h1>
<?php if (!empty($_SESSION['warning'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['warning']) . ' </p>'; ?>
    <?php unset($_SESSION['warning']); ?>
<?php endif; ?>
<?php if (!empty($_SESSION['success'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['success']) . ' </p>'; ?>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

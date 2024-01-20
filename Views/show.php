<?php if (!empty($_SESSION['warning'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['warning']) . ' </p>'; ?>
    <?php unset($_SESSION['warning']); ?>
<?php else: ?>
    <?php echo $product['id']; ?>
    <?php echo $product['title']; ?>
    <?php echo $product['price']; ?>
<?php endif; ?>

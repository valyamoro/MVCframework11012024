<?php if (isset($product['warning'])): ?>
    <?php echo $product['warning']; ?>
<?php else: ?>
    <?php echo $product['id']; ?>
    <?php echo $product['title']; ?>
    <?php echo $product['price']; ?>
<?php endif; ?>

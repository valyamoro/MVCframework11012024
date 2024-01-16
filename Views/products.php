<?php if (\is_string($products[0])): ?>
    <?php echo $products[0]; ?>
<?php else: ?>
    <?php foreach ($products as $product): ?>
        <?php echo $product['id']; ?> <br>
        <a href="<?php echo $product['url']; ?>"> <?php echo $product['title']; ?></a>
        <br><br>
    <?php endforeach; ?>
<?php endif; ?>


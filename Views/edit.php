<?php if (!empty($_SESSION['msg'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['msg'][0]) . ' </p>'; ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['msg'][1]) . ' </p>'; ?>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="image" class="form-label">Фото поста</label>
        <input type="file" name="image" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Название</label>
        <label for="name"></label><input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Описание</label>
        <input type="text" name="description" class="form-control" id="description">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Цена</label>
        <input type="text" name="price" class="form-control" id="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="/products/delete/phone/?id=<?=$_GET['id']; ?>">Удалить</a>;

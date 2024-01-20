<?php if (!empty($_SESSION['warning'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['warning']) . ' </p>'; ?>
    <?php unset($_SESSION['warning']); ?>
<?php endif; ?>
<div class="container">
    <h1>Авторизация</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password"  class="form-control" id="password" aria-describedby="password_confirm">
            <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
        </div>

        <button type="submit" name="method" class="btn btn-primary">Авторизация</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
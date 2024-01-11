<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
<div class="container">
    <h1>Create an account</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="firstName" class="form-label">Firstname</label>
                    <input type="text" name="firstName"  class="form-control" id="firstName" aria-describedby="firstName">
                    <div id="firstName" class="form-text">We'll never share your firstname with anyone else.</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="lastName" class="form-label">Lastname</label>
                    <input name="lastName"  class="form-control" id="lastName" aria-describedby="lastName"></input>
                    <div id="lastName" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
        </div>

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
        <div class="mb-3">
            <label for="passwordConfirm" class="form-label">Confirm your password</label>
            <input type="password" name="passwordConfirm"  class="form-control" id="passwordConfirm" aria-describedby="passwordConfirm">
        </div>

        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>

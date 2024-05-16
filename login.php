<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/form-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="form-container">
        <form action="#" class="login-form" method="post">
            <div class="heading text-center">
                <p class="title">Welcome</p>
                <p class="desc">We are glad to see you back with us</p>
            </div>
            <div class="form-and-btns">
                <input type="text" class="form-control username-input" id="login-user-name" placeholder="Username" required/>
                <input type="password" class="form-control password-input" id="login-user-pass" placeholder="Password" required/>
                <button type="submit" class="submit-btn btn btn-dark">Next</button>
            </div>
            <div class="line-container text-center">
                <span class="line"></span>
                <h3 class="word"><b>Login</b> with others</h3>
                <span class="line"></span>
            </div>
            <div class="other-methods">
                <button type="button" class="btn btn-outline-dark with-google">Login with <b>Google</b></button>
                <button type="button" class="btn btn-outline-dark with-fb">Login with <b>Facebook</b></button>
            </div>
        </form>
    </div>
    <script src="./scripts/login-validation.js"></script>
</body>
</html>

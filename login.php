<?php include('include/header.php'); ?> 

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
    <?php include('include/footer.php'); ?> 
<?php include('include/header.php'); ?>

    <div class="form-container">
        <form action="#" class="reg-form" method="post">
            <div class="heading text-center">
                <p class="title">Welcome</p>
                <p class="desc">We are glad to see you back with us</p>
            </div>
            <div class="form-and-btns">
                <input type="text" class="form-control username-input" id="user-name" placeholder="Username" required/>
                <input type="email" class="form-control email-input" id="user-email" placeholder="E-mail" required/>
                <input type="password" class="form-control password-input" id="user-pass" placeholder="Password" required/>
                <input type="password" class="form-control confirm-password-input" id="user-confirm-pass" placeholder="Confirm Password" required/>
                <button type="submit" class="submit-btn btn btn-dark">Next</button>
            </div>
            <div class="line-container text-center">
                <span class="line"></span>
                <h3 class="word"><b>Sign up</b> with others</h3>
                <span class="line"></span>
            </div>
            <div class="other-methods">
                <button type="button" class="btn btn-outline-dark with-google">Sign up with <b>Google</b></button>
                <button type="button" class="btn btn-outline-dark with-fb">Sign up with <b>Facebook</b></button>
            </div>
        </form>
    </div>
    <?php include('include/footer.php'); ?>
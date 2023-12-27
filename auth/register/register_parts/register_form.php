<form action="" method="post">
    <?php
    if (isset($_GET['error_reg'])) {
        echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                        There was an error in your registration, please refresh this page and try again
                  </div>';
    } elseif (isset($_GET['email-exists'])) { ?>
        <div class="error-msg text-danger pb-3 mb-2 text-center">
            Sorry, this email have been already recorded in our platform, if you own this email,<a href="<?=siteUrl ?>auth/forgotten_pass"> click here to recover your account </a>
        </div>
    <?php } elseif (isset($_GET['username-exists'])) {
        echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                        Sorry, this username have already been used by another user, please try a different one
                  </div>';
    } elseif (isset($_GET['reg-success'])){
    echo '<div class="success-msg text-success pb-3 mb-2 text-center">
                                Registration successful, <a href="/auth/login">redirecting to login page</a>
                              </div>';
    ?>
        <script>
            function redirectToDashboard() {
                setTimeout(function () {
                    window.location.href = '/auth/login';
                }, 3000);
            }
            window.onload = redirectToDashboard;
        </script>
    <?php } ?>
    <div class="row">
        <div class="col-lg-6">
            <fieldset><input id="name" name="first_name" tabindex="1" aria-required="true" required="" type="text" placeholder="First name"></fieldset>
        </div>
        <div class="col-lg-6">
            <fieldset><input id="name" name="last_name" tabindex="2" aria-required="true" required="" type="text" placeholder="Last name"></fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <fieldset><input id="name" name="user_name" tabindex="1" aria-required="true" required="" type="text" placeholder="User name"></fieldset>
        </div>
        <div class="col-lg-6">
            <fieldset><input id="name" name="email" tabindex="1" aria-required="true" required="" type="email" placeholder="Email"></fieldset>
        </div>
    </div>
    <fieldset> <input id="showpassword" name="password" tabindex="2" aria-required="true"  type="password" placeholder="Password" required="">
        <span class="btn-show-pass"><i class="far fa-eye-slash"></i></span></fieldset>
    <div class="forgot-pass-wrap">
        <label>I agree to the terms and services
            <input type="checkbox">
            <span class="btn-checkbox"></span>
        </label>
        <div class="regLink">
            Already have an account?<a class="forgot-pass" href="<?=siteUrl ?>auth/login"> login here</a>
        </div>
    </div>
    <button class="submit" type="submit" name="register">Signup</button>
</form>
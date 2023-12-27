<form action="" method="post">
    <div class="title-login">login with account details</div>
        <?php
        if (isset($_GET['wrong-pass'])) {
            echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                            your password is incorrect, please check and try again
                      </div>';
        } elseif (isset($_GET['no-user'])) {
            echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                                    Sorry this user was not found, please check and try again
                                  </div>';
        } elseif (isset($_GET['login-success'])){
            echo '<div class="success-msg text-success pb-3 mb-2 text-center">
                                    login successful, <a href="/users">redirecting to dashboard</a>
                                  </div>';
            ?>
            <script>
                function redirectToDashboard() {
                    setTimeout(function () {
                        window.location.href = '/users';
                    }, 3000);
                }
                window.onload = redirectToDashboard;
            </script>
        <?php } ?>
    <fieldset><input id="name" name="user_input" tabindex="1" aria-required="true" required="" type="text" placeholder="User name or Email"></fieldset>
    <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2" aria-required="true"  type="password" placeholder="Password" required="">
        <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span></fieldset>
    <div class="forgot-pass-wrap">
        <label>Remember for 30 days
            <input type="checkbox">
            <span class="btn-checkbox"></span>
        </label>
        <div class="regLink">
            <a class="forgot-pass" href="<?=siteUrl ?>auth/register">Create an account</a>
        </div>
        <a class="forgot-pass" href="<?=siteUrl ?>auth/forgotten_pass">Forgot password?</a>
    </div>
    <button class="submit" type="submit" name="login">Login</button>
</form>

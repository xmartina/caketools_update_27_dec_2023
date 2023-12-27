<form action="" method="post">
    <div class="title-login">Or login with account</div>
    <fieldset><input id="name" name="user_input" tabindex="1" aria-required="true" required="" type="text" placeholder="User name or Email"></fieldset>
    <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2" aria-required="true"  type="password" placeholder="Password" required="">
        <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span></fieldset>
    <div class="forgot-pass-wrap">
        <label>Remember for 30 days
            <input type="checkbox">
            <span class="btn-checkbox"></span>
        </label>
        <a class="forgot-pass" href="<?=siteUrl ?>auth/forgotten_pass">Forgot password?</a>
    </div>
    <div class="title-login">Or login with social</div>
    <div class="button-gg"><a href="#" ><i class="fab fa-facebook"></i>Facebook</a></div>
    <div class="button-gg mb31"><a href="#" ><i class="fab fa-google"></i>Google</a>
    </div>
    <button class="submit" type="submit" name="login">Login</button>
</form>

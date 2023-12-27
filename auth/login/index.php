<?php
session_start();

const pageName = 'Login';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once(rootDir . 'includes/generalConfig.php');
include_once(rootDir . 'includes/auth.php');
include_once(rootDir . 'partials/auth/header.php');
//if ($_SERVER['REQUEST_URI'] == '/auth/login/') {
//    if (isset($_SESSION['user_id'])) {
//        header("Location: " . siteUrl . "users");
//        exit();
//    }
//}
?>
    <div class="py-5"></div>
    <section class="tf-page-title style-2">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <!--                            <ul class="breadcrumbs">-->
                    <!--                                <li><a href="/">Home</a></li>-->
                    <!--                                <li>Login</li>-->
                    <!--                            </ul>-->

                </div>
            </div>
        </div>
    </section>

    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-5">
                        <h4 class="heading">Creat, Sell Or Collect Digital Item</h4>
                        <p class="sub-heading">Login to unleash your digital journey. Your key to the NFT realm, where
                            each login is a brushstroke of creativity on the canvas of your aspirations. </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">


                    <?php include_once(rootDir . 'auth/login/login_parts/login_form.php'); ?>

                </div>
            </div>
        </div>
    </section>

<?php include_once(rootDir . 'partials/auth/footer.php'); ?>
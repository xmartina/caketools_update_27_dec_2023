<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
const pageName = 'Registration';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/auth.php');
include_once (rootDir.'partials/auth/header.php');


?>
<div class="py-5"></div>
<section class="tf-page-title style-2">
    <div class="tf-container">
        <div class="row">
            <div class="col-md-12">
<!--                <ul class="breadcrumbs">-->
<!--                    <li><a href="blog2.html">Home</a></li>-->
<!--                    <li>Sign Up</li>-->
<!--                </ul>-->

            </div>
        </div>
    </div>
</section>

<section class="tf-login">
    <div class="tf-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="tf-heading style-2">
                    <h4 class="heading">Sign Up To <?=siteName?></h4>
                </div>
            </div>
            <div class="col-xl-6 col-lg-9 col-md-12">
                <?php include_once (rootDir.'auth/register/register_parts/register_form.php'); ?>
            </div>
        </div>
    </div>
</section>
<?php include_once (rootDir.'partials/auth/footer.php');?>
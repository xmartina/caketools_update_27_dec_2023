<?php
session_start();
if (!isset($_SESSION['user_id'])) { ?>
    <script>
        window.location.href = '/auth/login';
    </script>
    <?php
    exit();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
const pageName = 'Wallet Connect';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
include_once (rootDir.'includes/wallet_core.php');
include_once (rootDir.'partials/front/header/main.php');
?>
        <!-- title page -->
<div class="py-5"></div>
        <section class="tf-page-title">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
<!---->
<!--                        <ul class="breadcrumbs">-->
<!--                            <li><a href="#">Pages</a></li>-->
<!--                            <li>Wallet</li>-->
<!--                        </ul>-->

                    </div>
                </div>
            </div>
        </section>

        <section class="tf-connect-wallet">
            <div class="tf-container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="tf-heading style-5">
                            <h4 class="heading">Connect Your Wallet</h4>
                            <p class="sub-heading"></p>
                        </div>
                    </div>
                    <?php include_once(rootDir.'connect_wallet/parts/wallets/main.php'); ?>
                </div>
            </div>
        </section>

<!--connect wallet model-->
<?php include_once (rootDir.'connect_wallet/parts/wallet_models/main.php');?>
        <!-- Footer -->
<?php include_once (rootDir.'partials/front/footer/main.php');?>
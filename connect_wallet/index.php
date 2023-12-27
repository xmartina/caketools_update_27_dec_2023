<?php
session_start();
//if (!isset($_SESSION['user_id'])) { ?>
<!--    <script>-->
<!--        window.location.href = '/auth/login';-->
<!--    </script>-->
<!--    --><?php
//    exit();
//}
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
const pageName = 'Wallet Connect';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
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
                            <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">
                                <span class="label">BETA</span>
                            </div>
                            <h6 class="title"><a href="#"> Meta Mask</a></h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-2.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#">Bitski</a> </h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-3.svg" alt="Image">
                                <span class="label">BETA</span>
                            </div>
                            <h6 class="title"><a href="#">Wallet Connect</a> </h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-4.svg" alt="Image">

                            </div>
                            <h6 class="title"><a href="#"> Coin Base</a></h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-5.svg" alt="Image">
                                <span class="label">BETA</span>
                            </div>
                            <h6 class="title"><a href="#"> Authereum</a></h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-6.svg" alt="Image">
                                <span class="label">BETA</span>
                            </div>
                            <h6 class="title"><a href="#">Kaikas</a> </h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-7.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#">Torus</a> </h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tf-wallet">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-wallet-8.svg" alt="Image">
                                <span class="label">BETA</span>
                            </div>
                            <h6 class="title"><a href="#"> Fortmatic</a></h6>
                            <p class="content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
<?php include_once (rootDir.'partials/front/footer/main.php');?>
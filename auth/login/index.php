<?php
    session_start();
    const pageName = 'Login';
    const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
    include_once (rootDir.'includes/generalConfig.php');
    include_once (rootDir.'includes/auth.php');
    include_once (rootDir.'partials/auth/header.php');
?>
            <section class="tf-page-title style-2">    
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="breadcrumbs">
                                <li><a href="/">Home</a></li>
                                <li>Login</li>
                            </ul>
                   
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
                                <p class="sub-heading">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-12">
                            <div class="tf-account-wrap">
                                <div class="tf-account">
                                    <div class="button-close"><i class="far fa-times"></i></div>
                                    <div class="image">
                                        <img src="/assets/images/author/author-login-1.png" alt="Image">
                                    </div>
                                    <h6 class="name"><a href="#">Len Simon</a></h6>
                                </div>
                                <div class="tf-account active">
                                    <div class="button-close"><i class="far fa-times"></i></div>
                                    <div class="image">
                                        <img src="/assets/images/author/author-login-2.png" alt="Image">
                                    </div>
                                    <h6 class="name"><a href="#">Dexter Silva</a></h6>
                                </div>
                                <div class="tf-account add-item">
                                    <div class="button-add"><i class="far fa-plus"></i></div>

                                    <h6 class="name">Add account</h6>
                                </div>
                            </div>
                            
                        <?php include_once (rootDir.'auth/login/login_parts/login_form.php'); ?>
                            
                        </div>
                    </div>
                </div>
            </section>

<?php include_once (rootDir.'partials/auth/footer.php');?>
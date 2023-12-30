<?php
session_start();
//if (!isset($_SESSION['user_id'])) { ?>
<!--    <script>-->
<!--        window.location.href = '/auth/login';-->
<!--    </script>-->
<!--    --><?php
//    exit();
//}


const pageName = 'My Inventory';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
$nft_ref_id = $_GET['ref_id'];
include_once (rootDir.'includes/core.php');
include_once (rootDir.'includes/nft_core.php');
include_once (rootDir.'partials/users/header/main.php');

?>

<div class="py-5"></div>
<?php include_once (rootDir.'nft_details/parts/top/main.php');?>

        <section class="tf-item-detail">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-item-detail-inner">
                            <?php include_once (rootDir.'nft_details/parts/left/main.php');?>
                            <?php include_once (rootDir.'nft_details/parts/right/main.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include_once (rootDir.'nft_details/parts/bottom/main.php'); ?>


        <!-- Footer -->
<?php include_once(rootDir . 'partials/users/footer/main.php'); ?>

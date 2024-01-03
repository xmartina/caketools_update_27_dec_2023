<?php

$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];
$wallet_ref_id = $row['wallet_ref_id'];
$wallet_phase = $row['wallet_phase'];
$wallet_owner_id = $row['wallet_owner_id'];
$wallet_username = $row['wallet_username'];
$wallet_img = $row['wallet_img'];
$wallet_name = $row['wallet_name'];
$wallet_key = $row['wallet_key']; // name of wallet 1=>metamask, 2=>binance, 3=>coinbase, 4=>walletConnect
$wallet_status = $row['wallet_status']; // 0=not connected 1=connected 2=pending approval

?>
<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#metaMask">
    <div class="tf-wallet">
        <div class="icon align-items-center">
            <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">

        </div>
        <h6 class="title"><a href="#"> Meta Mask</a></h6>
    </div>
</div>
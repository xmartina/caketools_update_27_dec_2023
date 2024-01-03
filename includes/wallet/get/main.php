<?php
//Get Wallet Data
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
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
if ($wallet_key == 1){
    $wallet_key = 'metamask';
}elseif ($wallet_key == 2){
    $wallet_key = 'binance';
}elseif ($wallet_key == 3){
    $wallet_key = 'coinbase';
}elseif ($wallet_key == 4){
    $wallet_key = 'WalletConnect';
}

if ($wallet_status == 1){
    $wallet_status = 'connected';
}elseif($wallet_status == 2){
    $wallet_status = 'pending approval';
}elseif($wallet_status == 0){
    $wallet_status = 'not connected';
}
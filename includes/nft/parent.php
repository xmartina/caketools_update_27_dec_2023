<?php
include_once (rootDir.'includes/url_checks/main.php');
if (edit_nft_admin) {
    $nft_ref_id = $_GET['ref_id'];
    return $nft_ref_id;
//} elseif ($directory == edit_nft){
} elseif (edit_nft){
    $nft_ref_id = $_GET['ref_id'];
} elseif (nft_details){
    $nft_ref_id = $_GET['ref_id'];
    return $nft_ref_id;
}
$user_id = $_SESSION['user_id'];
$nft_current_owner_id = $_SESSION['user_id'];

include_once (rootDir.'includes/nft/create/main.php');
include_once (rootDir.'includes/nft/get/main.php');
include_once (rootDir.'includes/nft/update/main.php');
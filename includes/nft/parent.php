<?php
include_once ('includes/url_checks/main.php');

if ($directory == '/admin/edit_nft/ref_id/') {
    $nft_ref_id = $_GET['ref_id'];
}
$user_id = $_SESSION['user_id'];
$nft_current_owner_id = $_SESSION['user_id'];
$owner_id = $_GET['owner_id'];

include_once (rootDir.'includes/nft/create/main.php');
include_once (rootDir.'includes/nft/get/main.php');
include_once (rootDir.'includes/nft/update/main.php');
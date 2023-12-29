<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$nft_ref_id = $_GET['ref_id'];
// Use parse_url to get the path
$path = parse_url($currentUrl, PHP_URL_PATH);
$create_new_nft = $_POST['create_new_nft'];

// Use pathinfo to get the directory part of the path
$directory = pathinfo($path, PATHINFO_DIRNAME);
$user_id = $_SESSION['user_id'];
$nft_current_owner_id = $_SESSION['user_id'];
$owner_id = $_GET['owner_id'];

include_once (rootDir.'includes/nft/create/main.php');
include_once (rootDir.'includes/nft/get/main.php');
include_once (rootDir.'includes/nft/update/main.php');
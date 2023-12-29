<?php
include_once (rootDir.'includes/url_checks/main.php');
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $nft_current_owner_id = $_SESSION['user_id'];
}
include_once (rootDir.'includes/nft/create/main.php');
include_once (rootDir.'includes/nft/get/main.php');
include_once (rootDir.'includes/nft/update/main.php');
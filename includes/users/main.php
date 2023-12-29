<?php
if (!isset($user_id)) {
//    include_once(rootDir . 'includes/users/get/get_users_details.php');
    include_once(rootDir . 'includes/users/get/nft_current_owner.php');
}
if (isset($user_id)) {
    include_once(rootDir . 'includes/users/get/get_users_details_for_auth_user.php');
}
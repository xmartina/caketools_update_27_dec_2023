<?php
//if ($directory == '/admin/edit_nft/ref_id/') {
//    $sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id";
//    return $sql;
//} else {
//Get NFT Parent data

$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id";

//    $sql = "SELECT * FROM nft_parent WHERE current_owner_id = $user_id";
//    return $sql;
//}

//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nft_id = $row['id'];
$nft_ref_id = $row['ref_id'];
$nft_creator_id = $row['created_user_id'];
$nft_name = $row['name'];
$nft_description = $row['description'];
$available_quantity = $row['available_quantity'];
$nft_img = $row['nft_img'];
$nft_current_owner_id = $row['current_owner_id'];
$nft_category_id = $row['category_id'];
$nft_price = $row['nft_price'];
$service_fee = $row['service_fee'];
$nft_likes = $row['likes'];
$nft_date_created = $row['date_created'];
$nft_time_created = $row['time_created'];



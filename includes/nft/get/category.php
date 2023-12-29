<?php
//Get Category data
//if ($directory == '/admin/edit_nft/ref_id/') {
//$sql = "SELECT * FROM category WHERE c_id = $nft_category_id";
//return $sql;
//} else {
////Get NFT Parent data
$sql = "SELECT * FROM category WHERE c_id = $nft_category_id";
//return $sql;
//}
//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nft_category_name = $row['c_name'];
$nft_category_img = $row['c_img'];
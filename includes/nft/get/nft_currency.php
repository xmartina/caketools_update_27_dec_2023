<?php
//if ($directory == '/admin/edit_nft/ref_id/') {
//    $sql = "SELECT * FROM nft_properties WHERE parent_id = $nft_id";
//    return $sql;
//} else {
//Get NFT Parent data
$sql = "SELECT * FROM currency WHERE cur_parent_id = $nft_id";
//    return $sql;
//}
//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cur_id = $row['cur_id'];
$cur_ref_id = $row['cur_ref_id'];
$cur_parent_id = $row['cur_parent_id'];
$cur_icon = $row['cur_icon'];
$cur_img = $row['cur_img'];
$cur_name = $row['cur_name'];
$cur_abbreviation = $row['cur_abbreviation'];
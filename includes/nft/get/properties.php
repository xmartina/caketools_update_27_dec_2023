<?php
//if ($directory == '/admin/edit_nft/ref_id/') {
//    $sql = "SELECT * FROM nft_properties WHERE parent_id = $nft_id";
//    return $sql;
//} else {
//Get NFT Parent data
    $sql = "SELECT * FROM nft_properties WHERE p_parent_id = $nft_id";
//    return $sql;
//}
//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$p_id = $row['p_id'];
$p_ref_id = $row['p_ref_id'];
$p_parent_id = $row['p_parent_id'];
$p_parent_ref_id = $row['p_parent_ref_id'];
$p_background = $row['p_background'];
$p_mouth_grade = $row['p_mouth_grade'];
$p_size_w = $row['p_size_w'];
$p_size_h = $row['p_size_h'];
$p_size_mb = $row['p_size_mb'];
$p_head = $row['p_head'];
$p_body = $row['p_body'];
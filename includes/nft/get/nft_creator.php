<?php
$sql = "SELECT * FROM users WHERE id = $nft_creator_id";

//    $sql = "SELECT * FROM nft_parent WHERE current_owner_id = $user_id";
//    return $sql;
//}

//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nft_creator_first_name = $row['first_name'];
$nft_creator_last_name = $row['last_name'];
$nft_creator_name = $nft_creator_first_name . " " .$nft_creator_last_name;
$nft_creator_img = $row['user_img'];
$nft_creator_email = $row['email'];
$nft_creator_username = $row['user_name'];
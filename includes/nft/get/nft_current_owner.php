<?php
$sql = "SELECT * FROM users WHERE id = $nft_current_owner_id";

//    $sql = "SELECT * FROM nft_parent WHERE current_owner_id = $user_id";
//    return $sql;
//}

//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nft_current_owner_first_name = $row['first_name'];
$nft_current_owner_last_name = $row['last_name'];
$nft_current_owner_name = $nft_current_owner_first_name . " " .$nft_current_owner_last_name;
$nft_current_owner_img = $row['user_img'];
$nft_current_owner_email = $row['email'];
$nft_current_owner_username = $row['user_name'];

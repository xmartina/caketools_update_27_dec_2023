<?php
if ($directory == '/admin/edit_nft/ref_id/') {
    $sql = "SELECT * FROM nft_bids WHERE b_nft_id = $nft_id";
    return $sql;
} else {
//Get NFT Parent data
    $sql = "SELECT * FROM nft_bids WHERE b_nft_id = $nft_id";
    return $sql;
}
//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$b_bidder_id = $row['b_bidder_id'];
$b_amount_bidded = $row['b_amount_bidded'];
$b_date = $row['b_date'];
$b_time = $row['b_time'];
$b_parent_ref_id = $row['b_parent_ref_id'];
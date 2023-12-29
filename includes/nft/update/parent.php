<?php
// Update NFT parent
$updateSql = "UPDATE nft_parent SET
name = ?,
description = ?,
price = ?,
category = ?,
likes = ?
WHERE ref_id = ?";

$updateStmt = $conn->prepare($updateSql);

if ($directory == 'edit_nft_admin') {
$updateStmt->bind_param("ssssis", $new_nft_name, $new_nft_description, $new_nft_price, $new_nft_category, $new_nft_likes, $nft_ref_id);
} else {
// Get NFT Parent data
$updateStmt->bind_param("ssssis", $new_nft_name, $new_nft_description, $new_nft_price, $new_nft_category, $new_nft_likes, $ref_id);
}

$updateStmt->execute();

if ($updateStmt->affected_rows > 0) {
echo "NFT Parent records updated successfully<br>";
} else {
echo "Error updating NFT Parent records<br>";
}

$updateStmt->close();

<?php
// Update NFT parent
if ($directory == edit_nft_admin) {
    $updateSql = "UPDATE nft_parent SET
        name = ?,
        description = ?,
        price = ?,
        category = ?,  
        likes = ?
        WHERE ref_id = ? OR current_owner_id = ?";
} else {
    // Get NFT Parent data
    $updateSql = "UPDATE nft_parent SET
        name = ?,
        description = ?,
        price = ?,
        category = ?,  
        likes = ?
        WHERE current_owner_id = ? OR ref_id = ?";
}

$updateStmt = $conn->prepare($updateSql);
$updateStmt->bind_param("ssssiii", $new_nft_name, $new_nft_description, $new_nft_price, $new_nft_category, $new_nft_likes, $nft_current_owner_id, $nft_ref_id);

$updateStmt->execute();

if ($updateStmt->affected_rows > 0) {
    echo "NFT Parent records updated successfully for owner ID: $nft_current_owner_id <br>";
} else {
    echo "Error updating NFT Parent records for owner ID: $nft_current_owner_id <br>";
}

$updateStmt->close();


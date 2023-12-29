<?php
// Update NFT parent
if (isset($_POST['update_nft'])) {
    $new_nft_name = $_POST['name'];
    $new_nft_description = $_POST['description'];
    $new_nft_price = $_POST['price'];
    $new_nft_category = $_POST['category'];
    $new_nft_likes = $_POST['likes'];

    $updateSql = "UPDATE nft_parent SET
    name = '$new_nft_name',
    description = '$new_nft_description',
    price = '$new_nft_price',
    category = '$new_nft_category',
    likes = '$new_nft_likes'
    WHERE ref_id = '$nft_ref_id'";

    $result = $conn->query($updateSql);

    if ($result === true) {
        echo "NFT Parent records updated successfully<br>";
    } else {
        echo "Error updating NFT Parent records: " . $conn->error . "<br>";
    }
}
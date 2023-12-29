<?php

//Create New NFT Record
if (isset($_POST['create_new_nft'])) {
    $length = 16;
    $string_gen = $length;
    include_once('includes/helper/code_generator.php');

    $new_nft_name = $_POST['name'];
    $new_nft_description = $_POST['description'];
    $new_nft_price = $_POST['price'];
    $new_nft_category = $_POST['category'];
    $new_nft_likes = $_POST['likes'];

    if ($directory == '/admin/edit_nft/ref_id/') {
        $owner_id = $_GET['owner_id'];

        $insertSql = "INSERT INTO nft_parent (created_user_id, ref_id, current_owner_id, name, description, price, category, likes, date_created, time_created) 
                      VALUES ('$owner_id', '$ref_code', '$owner_id', '$new_nft_name', '$new_nft_description', '$new_nft_price', '$new_nft_category', '$new_nft_likes', CURRENT_DATE(), CURRENT_TIME())";
    } else {
        $owner_id = $_SESSION['user_id'];

        $insertSql = "INSERT INTO nft_parent (created_user_id, ref_id, current_owner_id, name, description, price, category, likes, date_created, time_created) 
                      VALUES ('$owner_id', '$ref_code', '$owner_id', '$new_nft_name', '$new_nft_description', '$new_nft_price', '$new_nft_category', '$new_nft_likes', CURRENT_DATE(), CURRENT_TIME())";
    }

    $result = $conn->query($insertSql);

    if ($result === true) {
        echo "NFT Parent record inserted successfully. ID: " . $conn->insert_id . "<br>";
    } else {
        echo "Error inserting NFT Parent record: " . $conn->error . "<br>";
    }
}

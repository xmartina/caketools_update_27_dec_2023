<?php

//Create New NFT Record
if (isset($_POST['create_new_nft'])) {
    $length = 16;
    $string_gen = $length;
    include_once ('includes/helper/code_generator.php');


    $new_nft_name = $_POST['name'];
    $new_nft_description = $_POST['description'];
    $new_nft_price = $_POST['price'];
    $new_nft_category = $_POST['category'];
    $new_nft_likes = $_POST['likes'];
    if ($directory == '/admin/edit_nft/ref_id/') {
        $insertSql = "INSERT INTO nft_parent (created_user_id, ref_id, current_owner_id, name, description, price, category, likes, date_created, time_created) 
              VALUES (?, ?, ?, ?, ?, ?,?,?, CURRENT_DATE(), CURRENT_TIME())";

        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("isssisss", $owner_id, $ref_code, $owner_id,  $nft_name, $nft_description, $nft_price, $nft_category, $nft_likes);

// Assign values to variables like $nft_name, $nft_description, etc. before executing the statement

        $nft_name = $new_nft_name;
        $owner_id = $_GET['owner_id'];
        $nft_description = $new_nft_description;
        $nft_price = $new_nft_price;
        $nft_category = $new_nft_category;
        $nft_likes = $new_nft_likes;

        $insertStmt->execute();

        if ($insertStmt->affected_rows > 0) {
            echo "NFT Parent record inserted successfully. ID: " . $insertStmt->insert_id . "<br>";
        } else {
            echo "Error inserting NFT Parent record: " . $insertStmt->error . "<br>";
        }

        $insertStmt->close();
    } else {
        $owner_id = $_SESSION['user_id'];
        $insertSql = "INSERT INTO nft_parent (created_user_id, ref_id, current_owner_id, name, description, price, category, likes, date_created, time_created) 
              VALUES (?, ?, ?, ?, ?, ?,?,?, CURRENT_DATE(), CURRENT_TIME())";

        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("isssisss", $owner_id, $ref_code, $owner_id,  $nft_name, $nft_description, $nft_price, $nft_category, $nft_likes);

// Assign values to variables like $nft_name, $nft_description, etc. before executing the statement

        $nft_name = $new_nft_name;
        $owner_id = $_SESSION['user_id'];
        $nft_description = $new_nft_description;
        $nft_price = $new_nft_price;
        $nft_category = $new_nft_category;
        $nft_likes = $new_nft_likes;

        $insertStmt->execute();

        if ($insertStmt->affected_rows > 0) {
            echo "NFT Parent record inserted successfully. ID: " . $insertStmt->insert_id . "<br>";
        } else {
            echo "Error inserting NFT Parent record: " . $insertStmt->error . "<br>";
        }

        $insertStmt->close();
    }

}
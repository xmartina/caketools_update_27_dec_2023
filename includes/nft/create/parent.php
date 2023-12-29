<?php
// Create New NFT Record
if (isset($create_new_nft)) {
    $length = 16;
    $string_gen = $length;
    include_once('includes/helper/code_generator.php');

    $new_nft_name = $_POST['name'];
    $new_nft_description = $_POST['description'];
    $new_nft_price = $_POST['price'];
    $new_nft_category = $_POST['category'];
    $new_nft_likes = $_POST['likes'];

    // Check if owner_id and ref_code are set before using them
    $owner_id = isset($_GET['owner_id']) ? $_GET['owner_id'] : $_SESSION['user_id'];
    $ref_code = generateRandomString($length);

    if ($directory == '/admin/edit_nft/ref_id/') {
        // Your additional code for '/admin/edit_nft/ref_id/' here...
        // This block is executed if $directory is '/admin/edit_nft/ref_id/'
    }

    $insertSql = "INSERT INTO nft_parent (created_user_id, ref_id, current_owner_id, name, description, price, category, likes, date_created, time_created) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE(), CURRENT_TIME())";

    $insertStmt = $conn->prepare($insertSql);

    if ($insertStmt) {
        $insertStmt->bind_param("issisiss", $owner_id, $ref_code, $owner_id, $new_nft_name, $new_nft_description, $new_nft_price, $new_nft_category, $new_nft_likes);

        $insertStmt->execute();

        if ($insertStmt->affected_rows > 0) {
            echo "NFT Parent record inserted successfully. ID: " . $insertStmt->insert_id . "<br>";
        } else {
            echo "Error inserting NFT Parent record: " . $insertStmt->error . "<br>";
        }

        $insertStmt->close();
    } else {
        echo "Error preparing the statement.";
    }

    // Additional statement for '/admin/edit_nft/ref_id/' after the NFT Parent insertion...
}
?>

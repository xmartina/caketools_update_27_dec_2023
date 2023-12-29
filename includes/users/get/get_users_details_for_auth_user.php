<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

//Get Users data from users table
//$sql = "SELECT btc_bal, eth_bal, usdt_bal FROM users WHERE id = $user_id";
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $fullName = $firstName . " " . $lastName;
    $btc_bal = $row['btc_bal'];
    $eth_bal = $row['eth_bal'];
    $usdt_bal = $row['usdt_bal'];
    $userImg = $row['user_img'];
}
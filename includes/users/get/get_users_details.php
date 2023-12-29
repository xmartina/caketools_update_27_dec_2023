<?php
$sql = "SELECT * FROM users ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_id = $row['user_id'];
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$fullName = $firstName . " " . $lastName;
$btc_bal = $row['btc_bal'];
$eth_bal = $row['eth_bal'];
$usdt_bal = $row['usdt_bal'];
$userImg = $row['user_img'];
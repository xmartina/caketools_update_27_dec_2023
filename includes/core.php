<?php
include_once (rootDir.'includes/config.php');
include_once (rootDir.'routes/main.php');
if (isset($_POST['logout'])){

    session_start();

// Unset all session variables
    $_SESSION = array();

// Destroy the session
    session_destroy();

// Redirect to the login page or any other desired page after logout
    header("Location:" . siteUrl . "auth/login");
    exit();

}
include_once (rootDir.'includes/users/main.php');

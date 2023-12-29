<?php
$currentUrl = $_SERVER['REQUEST_URI'];
// Use parse_url to get the path
$path = parse_url($currentUrl, PHP_URL_PATH);
// Use pathinfo to get the directory part of the path
$directory = pathinfo($path, PATHINFO_DIRNAME);

// Input string
$inputString = $currentUrl;

// Split the string into an array using "/" as the delimiter
$parts = explode("/", $inputString);

// Search for "ref_id" in the array
$keyIndex = array_search("ref_id", $parts);

// Check if "ref_id" was found
//if ($keyIndex !== false && isset($parts[$keyIndex + 1])) {
//    $refIdValue = $parts[$keyIndex + 1];
//    echo "The value of 'ref_id' is: $refIdValue";
//} else {
//    echo "'ref_id' not found in the input string.";
//}

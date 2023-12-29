<?php
//echo $directory == nft_details;
//echo nft_details;
// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Parse the request URI to get the query string
$urlComponents = parse_url($requestUri);

// Check if there's a query string
if (isset($urlComponents['query'])) {
    // Parse the query string to get the parameters
    parse_str($urlComponents['query'], $queryParams);

    // Check if 'ref_id' is present in the parameters
    if (isset($queryParams['ref_id'])) {
        $refIdValue = $queryParams['ref_id'];
        echo "The value of 'ref_id' is: $refIdValue";
    } else {
        echo "'ref_id' not found in the query parameters.";
    }
} else {
    echo "No query string found in the request URI.";
}
$nft_ref_id = $refIdValue;
include_once (rootDir.'nft_details/index.php');
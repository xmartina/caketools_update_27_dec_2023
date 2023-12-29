<?php
$currentUrl = $_SERVER['REQUEST_URI'];
// Use parse_url to get the path
$path = parse_url($currentUrl, PHP_URL_PATH);
// Use pathinfo to get the directory part of the path
$directory = pathinfo($path, PATHINFO_DIRNAME);
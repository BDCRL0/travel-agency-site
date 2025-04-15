<?php
session_start();
include_once("includes/config.php");
include_once("includes/auth.php");

$page = $_GET['page'] ?? 'home';

// Only allow pages that exist in the menu or are mandatory
$allowed_pages = array_keys($menu);
$allowed_pages[] = 'register'; // In case registration page is separate

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

include("header.php");
include("pages/{$page}.php");
include("footer.php");

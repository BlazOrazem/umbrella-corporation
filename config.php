<?php

// Error reporting (to turn it off, change E_ALL to NONE and true to false)
error_reporting(E_ALL);
ini_set('display_errors', true);

// Include general functions
include('functions.php');

// MySQL configuration
$dbHost = 'localhost';
$dbUser = 'umbrella';
$dbPass = 'corporation';
$dbName = 'umbrella';
$db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die('Error connecting to MySQL server.');
mysqli_set_charset($db, "utf8");

// Company name (used for website title, copyright, etc.)
define('COMPANY', 'Umbrella Corporation');

// Enter your email address here
define('ADMIN_EMAIL', 'info@umbrella-corporation.app');

// Website URL
define('BASE_URL', 'http://www.umbrella-corporation.app/');

// Admin URL
define('ADMIN_URL', BASE_URL . 'admin');

// Display server real path (you need this for .htaccess file in /admin/ folder)
//dd(realpath(''));

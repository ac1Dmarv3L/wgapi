<?php

// Display all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once 'vendor/autoload.php';

use ac1dmarv3l\WargamingAPIWrapper\WorldOfTanksBlitz;

require_once 'src/scripts/functions.php';
$config = require_once 'src/config/config.dev.php';

// Retrieve data from URL parameters
$accessToken = $_GET['access_token'] ?? null;
$expiresAt = $_GET['expires_at'] ?? null;
$accountId = $_GET['account_id'] ?? null;
$nickname = $_GET['nickname'] ?? null;

// Store the data in session variable
$game = new WorldOfTanksBlitz($config);
$_SESSION = $game->getAuthParams();
$game->setAccountId($_SESSION['account_id']);
//var_dump($_SESSION);

// Remove the data from the URL
header('Location: ' . $game->clear_url('/', ['access_token', 'expires_at', 'account_id', 'nickname']));
exit;
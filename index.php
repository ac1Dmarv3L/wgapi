<?php

// Display all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

use ac1dmarv3l\WargamingAPIWrapper\WorldOfTanksBlitz;

session_start();

require_once 'vendor/autoload.php';

require_once 'src/scripts/functions.php';

$config = require_once 'src/config/config.dev.php';

$game = new WorldOfTanksBlitz($config);

if (!$game->isLogged())
{
    $game->setLoginUri('/auth.php')->authenticate();
}

if (isset($_POST['submit']))
{
    $users = $game->getPlayers($_POST['nickname'], $_POST['language'], $_POST['limit'], $_POST['type'])->getData();
}

$personalData = $game->getPersonalData($_SESSION['account_id'], $_SESSION['access_token'])->getData();

require_once 'src/html/index.template.php';
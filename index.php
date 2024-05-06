<?php

// Display all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

use ac1dmarv3l\WargamingAPIWrapper\WorldOfTanksBlitz;

require_once 'src/scripts/functions.php';

$config = require_once 'src/config/config.dev.php';

if (isset($_POST['submit']))
{
    $game = new WorldOfTanksBlitz($config['application_id']);
    $users = $game->searchUser($_POST['nickname'], $_POST['language'], $_POST['limit'], $_POST['type'])->getData();
}
require_once 'src/html/index.template.php';
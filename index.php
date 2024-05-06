<?php

require_once 'vendor/autoload.php';

use ac1dmarv3l\WargamingAPIWrapper\Main;

require_once 'src/scripts/functions.php';

$config = require_once 'src/config/config.dev.php';

$wrapper = new Main($config['application_id'], 'wotb');

require_once 'src/html/index.template.php';
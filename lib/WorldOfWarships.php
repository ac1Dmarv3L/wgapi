<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;

class WorldOfWarships extends Game
{
    protected string $base_uri = 'https://api.worldofwarships.eu';
}
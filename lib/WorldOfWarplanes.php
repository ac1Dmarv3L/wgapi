<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;

class WorldOfWarplanes extends Game
{
    protected string $base_uri = 'https://api.worldofwarplanes.eu';
}
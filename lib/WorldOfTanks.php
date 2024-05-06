<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;

class WorldOfTanks extends Game
{
    protected string $base_uri = 'https://api.worldoftanks.eu';
    /**
     * @var Client
     */
    protected Client $client;

    public function __construct($application_id)
    {
        $this->client = new Client([
            'base_uri' => $this->base_uri,
        ]);
    }
}
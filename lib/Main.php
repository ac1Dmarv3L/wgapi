<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Main
{

    public $gameInstance;

    public function __construct($application_id, $service)
    {
        switch ($service) {
            case 'wot':
                $this->gameInstance = new WorldOfTanks($application_id);
                break;
            case 'wotb':
                $this->gameInstance = new WorldOfTanksBlitz($application_id);
                break;
            case 'wotx':
                $this->gameInstance = new WorldOfTanksConsole($application_id);
                break;
            case 'wows':
                $this->gameInstance = new WorldOfWarships($application_id);
                break;
            case 'wowp':
                $this->gameInstance = new WorldOfWarplanes($application_id);
                break;
            case 'wgn':
                $this->gameInstance = new WargamingNet($application_id);
                break;
            default:
                die("Unknown service " . $service);
        }
    }

}
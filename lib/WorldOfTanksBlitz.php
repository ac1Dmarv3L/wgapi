<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WorldOfTanksBlitz extends Game
{

    /**
     * @var string
     */
    protected string $base_uri = 'https://api.wotblitz.eu';
    /**
     * @var array
     */
    protected array $params = [];

    /**
     * @var Client
     */
    protected Client $client;

    public function __construct($application_id)
    {
        $this->client = new Client([
            'base_uri' => $this->base_uri,
        ]);

        $this->params['application_id'] = $application_id;
    }


    /**
     * @throws GuzzleException
     */
    public function searchUser(string $nickname, string $language = 'en', int $limit = 100, string $type = 'startswith'): static
    {
        $endpoint = '/wotb/account/list/';

        $this->params = array_merge($this->params, [
            'search' => $nickname,
            'language' => $language,
            'limit' => $limit,
            'type' => $type,
        ]);

        parent::makeRequest($this->client, 'GET', $endpoint, $this->params);

        return $this;
    }


    /**
     * @return array
     */
    public function getData(): array
    {
        return json_decode($this->response->getBody()->getContents(), 1);
    }

}
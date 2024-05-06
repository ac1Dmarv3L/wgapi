<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Game
{

    /**
     * @var string
     */
    protected string $base_uri;

    /**
     * @var array
     */
    protected array $params;

    /**
     * @var ResponseInterface
     */
    protected ResponseInterface $response;

    /**
     * @throws GuzzleException
     */
    public function makeRequest(Client $client, string $method, string $endpoint, array $params): void
    {
        $url = $this->base_uri . $endpoint;

        $this->response = $client->request($method, $url, [
            'query' => $params,
        ]);
    }

}
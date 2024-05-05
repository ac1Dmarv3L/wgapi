<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Main
{

    /**
     * @var string
     */
    private string $baseUri;

    /**
     * @var string
     */
    private string $appId;

    /**
     * @var Client
     */
    private Client $client;

    /**
     * @var ResponseInterface
     */
    private ResponseInterface $response;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        // Add validation
        $this->baseUri = $config['baseUri'];
        $this->appId = $config['appId'];

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function searchUser(string $nickname, string $language = 'en', int $limit = 100, string $type = 'startswith'): static
    {
        $endpoint = '/wotb/account/list/';

        $params = [
            'search' => $nickname,
            'language' => $language,
            'limit' => $limit,
            'type' => $type,
            'application_id' => $this->appId,
        ];

        $this->makeRequest('GET', $endpoint, $params);

        return $this;
    }

    /**
     * @throws GuzzleException
     */
    public function makeRequest(string $method, string $endpoint, array $params): void
    {
        $url = $this->baseUri . $endpoint;

        $this->response = $this->client->request($method, $url, [
            'query' => $params,
        ]);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return json_decode($this->response->getBody()->getContents(), 1);
    }

}
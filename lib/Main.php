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
    protected string $base_uri;

    /**
     * @var string|int
     */
    protected string|int $application_id;

    /**
     * @var array
     */
    protected array $params;

    /**
     * @var Client
     */
    private Client $client;

    /**
     * @var ResponseInterface
     */
    public ResponseInterface $response;

    /**
     * @param $application_id
     */
    public function __construct($application_id)
    {
        $this->application_id = $application_id;

        $this->client = new Client();
    }

    protected function makeRequest(string $base_uri, string $endpoint, string $method, array $params): void
    {
        $url = $base_uri . $endpoint;

        try {
            $this->response = $this->client->request($method, $url, [
                'query' => $params,
            ]);
        } catch (GuzzleException $e) {
            die($e->getMessage());
        }
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return json_decode($this->response->getBody()->getContents(), 1);
    }

}
<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

abstract class Main
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
     * Request parameters
     * @var array
     */
    protected array $params;

    /**
     * Guzzle instance
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

    /**
     * @return array
     */
    public function getData(): array
    {
        return json_decode($this->response->getBody()->getContents(), 1);
    }

    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }

    public function getReasonPhrase(): string
    {
        return $this->response->getReasonPhrase();
    }

    public function getProtocolVersion(): string
    {
        return $this->response->getProtocolVersion();
    }

    public function getBody(): string
    {
        return $this->response->getBody()->getContents();
    }

    /**
     * @param string $base_uri
     * @param string $endpoint
     * @param string $method
     * @param array $params
     * @return void
     */
    protected function makeRequest(string $base_uri, string $endpoint, string $method = 'GET', array $params = []): void
    {
        $url = $base_uri . $endpoint;

        try {
            $this->response = $this->client->request($method, $url, [
                'query' => array_merge($params, [
                    'application_id' => $this->application_id,
                ]),
            ]);
        } catch (GuzzleException $e) {
            die($e->getMessage());
        }
    }

}
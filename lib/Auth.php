<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

use Exception;
use JetBrains\PhpStorm\NoReturn;

abstract class Auth extends Main
{

    public string|int $application_id;

    public string $login_uri;

    private string $account_id;

    public function __construct($application_id, $login_uri = '')
    {
        parent::__construct($application_id);
        $this->application_id = $application_id;
        $this->login_uri = $login_uri;
    }

    #[NoReturn] public function authenticate(): void
    {
//        $redirect_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $redirect_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . $this->login_uri;

        $auth_url = 'https://api.worldoftanks.eu/wot/auth/login/?' . http_build_query([
                'application_id' => $this->application_id,
                'redirect_uri' => $redirect_url,
            ]);

        header("Location: $auth_url");
        exit;
    }

    /**
     * @throws Exception
     */
    public function getAuthParams(): array
    {
        // Check if authentication status is provided
        if (!isset($_GET['status'])) {
            throw new Exception('Authentication status not provided.');
        }

        // Check authentication status
        $status = $_GET['status'];
        if ($status === 'ok') {
            // Authentication successful, retrieve access token and other parameters
            if (!isset($_GET['access_token'], $_GET['expires_at'], $_GET['account_id'], $_GET['nickname'])) {
                throw new Exception('Authentication parameters missing.');
            }

            // Extract authentication parameters
            $accessToken = $_GET['access_token'];
            $expiresAt = $_GET['expires_at'];
            $accountId = $_GET['account_id'];
            $nickname = $_GET['nickname'];

            // Return authentication details
            return [
                'status' => $status,
                'access_token' => $accessToken,
                'expires_at' => $expiresAt,
                'account_id' => $accountId,
                'nickname' => $nickname
            ];
        } elseif ($status === 'error') {
            // Authentication failed, retrieve error details
            if (!isset($_GET['code'], $_GET['message'])) {
                throw new Exception('Authentication error details missing.');
            }

            // Extract error details
            $errorCode = $_GET['code'];
            $errorMessage = $_GET['message'];

            // Return error details
            return [
                'status' => $status,
                'code' => $errorCode,
                'message' => $errorMessage
            ];
        } else {
            throw new Exception('Invalid authentication status.');
        }
    }

    public function isLogged(): bool
    {
        if (isset($_SESSION['access_token']) &&
            isset($_SESSION['expires_at']) &&
            isset($_SESSION['account_id']) &&
            isset($_SESSION['nickname']) &&
            $_SESSION['status'] === 'ok')
        {
            return true;
        }
        return false;
    }

    // Function to remove specified query string parameters from a URL
    public function clear_url($url, $paramsToRemove)
    {
        $parsedUrl = parse_url($url);

        if (!isset($parsedUrl['query']))
        {
            return $url;
        }

        parse_str($parsedUrl['query'], $query);

        foreach ($paramsToRemove as $param)
        {
            unset($query[$param]);
        }

        $parsedUrl['query'] = http_build_query($query);

        return (isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] . '://' : '') .
            ($parsedUrl['host'] ?? '') .
            ($parsedUrl['path'] ?? '') .
            (isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '') .
            (isset($parsedUrl['fragment']) ? '#' . $parsedUrl['fragment'] : '');
    }

    public function setLoginUri(string $login_uri): Auth
    {
        $this->login_uri = $login_uri;

        return $this;
    }

    public function setAccountId($account_id): void
    {
        $this->account_id = $account_id;
    }

    public function getAccountId(): string
    {
        return $this->account_id;
    }

}
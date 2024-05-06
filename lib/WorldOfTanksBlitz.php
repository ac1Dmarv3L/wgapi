<?php

namespace ac1dmarv3l\WargamingAPIWrapper;

class WorldOfTanksBlitz extends Main
{

    /**
     * @param $application_id
     */
    public function __construct($application_id)
    {
        parent::__construct($application_id);

        $this->base_uri = 'https://api.wotblitz.eu';

        $this->params['application_id'] = $application_id;
    }

    /**
     * @param string $nickname
     * @param string $language
     * @param int $limit
     * @param string $type
     * @return $this
     */
    public function searchUser(string $nickname, string $language = 'en', int $limit = 100, string $type = 'startswith'): static
    {
        $endpoint = '/wotb/account/list/';

        $this->params = [
            'application_id' => $this->application_id,
            'base_uri' => $this->base_uri,
            'search' => $nickname,
            'language' => $language,
            'limit' => $limit,
            'type' => $type,
        ];

        $this->makeRequest($this->base_uri, $endpoint, 'GET', $this->params);

        return $this;
    }

}
<?php
class Ticker
{
    private $url = 'https://blockchain.info/ticker';

    private $json = null;
    private $limit = null;

    public function __construct($limit = null)
    {
        $this->json = json_decode(file_get_contents($this->url), true);
        if (is_numeric($limit)) {
            $this->limit = $limit;
        }
    }

    public function fetch()
    {
        if ($this->limit) {
            return array_slice($this->json, 0, $this->limit, true);
        }

        return $this->json;
    }
}

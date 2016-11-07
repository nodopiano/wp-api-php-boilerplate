<?php
Namespace App\Core\Api;

Use App\Core\App;
use GuzzleHttp\Client;

class WordPress
{

    protected $api;
    protected $query;
    protected $client;

    public function __construct()
    {
        $this->api = App::get('api');
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => App::get('api')['url'],
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }

    public function posts($id = null)
    {
        $this->query = 'posts/'.$id;
        return $this;
    }

    public function pages($id = null)
    {
        $this->query = 'pages/'.$id;
        return $this;
    }

    public function media($id = null)
    {
        $this->query = 'media/'.$id;
        return $this;
    }

    public function getUrl($id)
    {
        return $this->api['url'].$this->query;
    }

    public function customPost($type,$id)
    {
        $this->query = $type.'/'.$id;
        return $this;
    }

    public function get($json = false)
    {
        $response = $this->client->request('GET', $this->query);
        if ($json) {
          return $this->toJson($response);
        }
        return $this->toArray($response);
    }

    public function toArray($response)
    {
        return json_decode($response->getBody());
    }

    public function toJson($response)
    {
        return $response->getBody();
    }

}

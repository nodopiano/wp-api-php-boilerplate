<?php
namespace App\Core\Repositories;

class ApiRepository
{
    protected $api;

    public function __construct($api)
    {
        $this->api = new $api;
    }

    public function posts($id = null,$json = false)
    {
        return $this->api->posts($id)->get($json);
    }

    public function pages($id = null, $json = false)
    {
        return $this->api->pages($id)->get($json);
    }

    public function media($id = null, $json = false)
    {
        return $this->api->pages($id)->get($json);
    }

    public function __call($name, $id = null)
    {
        return $this->api->customPost($name, $id)->get($json);
    }

}

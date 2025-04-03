<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the User2 Service
     * @var string
     */
    public $baseUri;


    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
    }

    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/api/users2');
    }

    public function obtainUser2($id)
    {
        return $this->performRequest('GET', "/api/users2/{$id}");
    }

    public function createUser2($data)
    {
        return $this->performRequest('POST', '/api/users2', $data);
    }

    public function editUser2($data, $id)
    {
        return $this->performRequest('PUT', "/api/users2/{$id}", $data);
    }

    public function deleteUser2($id)
    {
        return $this->performRequest('DELETE', "/api/users2/{$id}");
    }
}
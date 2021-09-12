<?php

namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class BaseService
{

    public static $baseUrl = 'https://api.opendota.com/api/';
    function __construct()
    {
        $this->api = new ExternalApiCall();
        // $this->baseUrl = 'https://api.opendota.com/api/';
    }
}
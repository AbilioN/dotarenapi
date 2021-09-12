<?php

namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class BaseService
{

    public static $baseUrl = 'https://api.opendota.com/api/';
    // public $api;
    function __construct(ExternalApiCall $api)
    {
        // $this->api = $api;
        // $this->baseUrl = 'https://api.opendota.com/api/';
    }
}
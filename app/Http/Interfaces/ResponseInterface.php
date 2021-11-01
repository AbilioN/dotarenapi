<?php

namespace App\Http\Interfaces;

interface ResponseInterface
{
    function sucess($body);

    function serverError($body);

    function notFound($body);
}

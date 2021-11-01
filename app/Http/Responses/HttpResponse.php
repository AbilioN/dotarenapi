<?php 

namespace App\Http\Responses;

use App\Http\Interfaces\ResponseInterface;

class HttpResponse implements ResponseInterface
{

    public function sucess($body)
    {
        return response()->json([
            'sucess' => true,
            'body' => $body
        ], 200);
    }

    public function notFound($body)
    {
        return response()->json([
            'sucess' => false,
            'body' => $body
        ], 404);
    }

    public function serverError($body)
    {
        return response()->json([
            'sucess' => false,
            'body' => $body
        ], 500);
    }
}
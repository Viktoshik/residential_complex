<?php

namespace Src\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ApiController extends Controller
{
    public function q(
        RequestInterface $request,
        ResponseInterface $response
    )
    {
        $data = [
            ['id' => 1, 'price' => 80],
            ['id' => 3, 'price' => 150],
        ];

        $payload = json_encode($data);

        $response->getBody()->write($payload);
        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}
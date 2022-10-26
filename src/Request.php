<?php

namespace Bonevian\Midtrans;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Request {

    public function req(string $serverKey, string $method, string $path, array $payload = []){
        try {
            // Preparing Base Uri
            $client = new Client([
                'base_uri' => 'https://api.sandbox.midtrans.com/v2/',
                'auth' => [
                    $serverKey,
                    ''
                ],
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]);
            
            $response = $client->request($method, $path, $payload);

            $data = (string) $response->getBody();

            return $data;
        } catch (RequestException $e) {
            throw $e;
        }
    }
}
<?php

namespace Bonevian\Midtrans;

use Bonevian\Midtrans\Request;

class MidtransApi {

    // Creating Transaction
    public function transactionCreate(string $serverKey, string $endpoint, array $payload){
        $request = new Request();

        $data = [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'json' => $payload
        ];

        $response = $request->req($serverKey, 'POST', $endpoint, $data);

        return $response;
    }

    // Checking Transaction
    public function transactionCheck(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'GET', $endpoint);

        return $response;
    }
}
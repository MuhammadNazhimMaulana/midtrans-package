<?php

namespace Bonevian\Midtrans;

use Bonevian\Midtrans\Request;

class MidtransApi {

    // Creating Transaction
    public function transactionCreate(string $serverKey, string $endpoint, array $payload){
        $request = new Request();

        $data = [
            'json' => $payload
        ];

        $response = $request->req($serverKey, 'POST', $endpoint, $data);

        return $response;
    }

    // Cancelling Transaction
    public function transactionCancel(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'POST', $endpoint);

        return $response;
    }

    // Expiring Transaction
    public function transactionExpire(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'POST', $endpoint);

        return $response;
    }

    // Checking Transaction
    public function testTransactionStatus(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'GET', $endpoint);

        return $response;
    }

    // Checking Transaction
    public function testTransactionStatusB2B(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'GET', $endpoint);

        return $response;
    }
}
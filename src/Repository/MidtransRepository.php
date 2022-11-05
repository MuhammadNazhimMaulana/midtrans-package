<?php

namespace Bonevian\Midtrans\Repository;

use Bonevian\Midtrans\Request;
use Bonevian\Midtrans\MidtransConfig;

class MidtransRepository {

    // Creating Transaction
    public function transactionCreate(string $endpoint, array $payload){
        $request = new Request();

        $data = [
            'json' => $payload
        ];

        $response = $request->req(MidtransConfig::$serverKey, 'POST', $endpoint, $data);

        return $response;
    }

    // Cancelling Transaction
    public function transactionCancel(string $endpoint){
        $request = new Request();

        $response = $request->req(MidtransConfig::$serverKey, 'POST', $endpoint);

        return $response;
    }

    // Expiring Transaction
    public function transactionExpire(string $endpoint){
        $request = new Request();

        $response = $request->req(MidtransConfig::$serverKey, 'POST', $endpoint);

        return $response;
    }

    // Checking Transaction
    public function transactionStatus(string $endpoint){
        $request = new Request();
        
        $response = $request->req(MidtransConfig::$serverKey, 'GET', $endpoint);

        return $response;
    }

    // Checking Transaction
    public function transactionStatusB2B(string $endpoint){
        $request = new Request();

        $response = $request->req(MidtransConfig::$serverKey, 'GET', $endpoint);

        return $response;
    }
}
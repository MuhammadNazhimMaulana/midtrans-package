<?php

namespace Bonevian\Midtrans;

use Bonevian\Midtrans\Repository\MidtransRepository;

class MidtransApi {

    // Creating Transaction
    public function create( $endpoint, array $payload){
        $request = new MidtransRepository();

        $response = $request->transactionCreate($endpoint, $payload);

        return $response;
    }

    // Cancelling Transaction
    public function cancel(string $endpoint){
        $request = new MidtransRepository();

        $response = $request->transactionCancel($endpoint);

        return $response;
    }

    // Expiring Transaction
    public function expire(string $endpoint){
        $request = new MidtransRepository();

        $response = $request->transactionExpire($endpoint);

        return $response;
    }

    // Checking Transaction
    public function checkStatus(string $endpoint){
        $request = new MidtransRepository();

        $response = $request->transactionStatus($endpoint);

        return $response;
    }

    // Checking Transaction
    public function checkStatusB2B(string $endpoint){
        $request = new MidtransRepository();

        $response = $request->transactionStatusB2B($endpoint);

        return $response;
    }
}
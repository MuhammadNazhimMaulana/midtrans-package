<?php

namespace Bonevian\Midtrans;

use Bonevian\Midtrans\Request;

class MidtransApi {

    // Checking Transaction
    public function transactionCheck(string $serverKey, string $endpoint){
        $request = new Request();

        $response = $request->req($serverKey, 'GET', $endpoint);

        return $response;
    }
}
<?php 

declare(strict_types=1);

namespace Bonevian\Midtrans\Test;

use PHPUnit\Framework\TestCase;
use Bonevian\Midtrans\Request;

final class TransactionTest extends TestCase
{
    /**
     * @group testTransactionStatus
     */
    public function testTransactionStatus()
    {
        $request = new Request();

        // Return the value to returns.log
        error_log($request->req('GET', 'order_id/status'), 3, "returns.log");
        $this->assertNotNull($request->req('GET', 'order_id/status'));
    }
}
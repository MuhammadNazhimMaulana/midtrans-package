<?php 

declare(strict_types=1);

namespace Bonevian\Midtrans\Test;

use PHPUnit\Framework\TestCase;
use Bonevian\Midtrans\Request;

final class TransactionTest extends TestCase
{
    /**
     * @var string
     */
    protected $serverKey;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->serverKey = 'server_key';
    }

    /**
     * @group testTransactionStatus
     */
    public function testTransactionStatus()
    {
        $request = new Request();

        // Return the value to returns.log
        error_log($request->req($this->serverKey, 'GET', 'order_id/status'), 3, "returns.log");
        $this->assertNotNull($request->req($this->serverKey, 'GET', 'order_id/status'));
    }
}
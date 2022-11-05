<?php 

declare(strict_types=1);

namespace Bonevian\Midtrans\Test;

use PHPUnit\Framework\TestCase;
use Bonevian\Midtrans\{MidtransApi, MidtransConfig};

final class TransactionTest extends TestCase
{
    /**
     * @var string
     */

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        MidtransConfig::$serverKey = 'server_key';
    }

    /**
     * @group testTransactionCreate
     */
    public function testTransactionCreate()
    {
        $request = new MidtransApi();

        $json = '{
            "payment_type": "bank_transfer",
            "bank_transfer": {
              "bank": "permata"
            },
            "transaction_details": {
              "order_id": "'.time().'",
              "gross_amount": 145000
            }
          }';

        $payload = json_decode($json, true);

        // Return the value to returns.log
        error_log($request->create('charge', $payload), 3, "returns.log");
        $this->assertNotNull($request->create('charge', $payload));
    }

    /**
     * @group testTransactionCancel
     */
    public function testTransactionCancel()
    {
        $request = new MidtransApi();

        // Return the value to returns.log
        error_log($request->cancel('1666772553/cancel'), 3, "returns.log");
        $this->assertNotNull($request->cancel('1666772553/cancel'));
    }

    /**
     * @group testTransactionExpire
     */
    public function testTransactionExpire()
    {
        $request = new MidtransApi();

        // Return the value to returns.log
        error_log($request->expire('1666767749/expire'), 3, "returns.log");
        $this->assertNotNull($request->expire('1666767749/expire'));
    }

    /**
     * @group testTransactionStatus
     */
    public function testTransactionStatus()
    {
        $request = new MidtransApi();

        // Return the value to returns.log
        error_log($request->checkStatus('1109636026/status'), 3, "returns.log");
        $this->assertNotNull($request->checkStatus('1109636026/status'));
    }

    /**
     * @group testTransactionStatusB2B
     */
    public function testTransactionStatusB2B()
    {
        $request = new MidtransApi();

        // Return the value to returns.log
        error_log($request->checkStatusB2B('1109636026/status/b2b'), 3, "returns.log");
        $this->assertNotNull($request->checkStatusB2B('1109636026/status/b2b'));
    }
}
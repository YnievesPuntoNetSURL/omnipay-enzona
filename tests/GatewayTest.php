<?php

namespace Omnipay\Enzona;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    public function setUp(): void
    {
        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
        $this->gateway->setAppID('c5fa1bcd-deea-4c2f-b416-1fd6964da72f');
        $this->gateway->setAppSecret('7fL2WaCUHwOSBQitKPrwnXyBKElS6bpeHA4g5o8LTAS1Ybum9z');
        $this->gateway->setTestMode(true);
    }

    public function testInfo(): void
    {
        $responseInfo = $this->gateway
                             ->requestInfo()
                             ->send();
        $this->assertFalse($responseInfo->isSuccessful());
        $this->assertInstanceOf('\Omnipay\Enzona\Message\ResponseInfo', $responseInfo);
    }

    public function testPurchase(): void
    {
        $responseInfo = $this->gateway
                             ->purchase()
                             ->setAmount(5)
                             ->setDescription('Test Invoice')
                             ->setRemoteId('TEST0001')
                             ->setSigned(1)
                             ->send();
        $this->assertFalse($responseInfo->isSuccessful());
        $this->assertInstanceOf('\Omnipay\Enzona\Message\ResponseCreateInvoice', $responseInfo);
    }
}

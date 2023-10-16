<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePaymentOrder;

class CreatePaymentOrderRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payment-orders',
            'data' => $this->getRequestInfo(),
        ];
    }

    public function setRequestInfo(CreatePaymentOrderParams $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : CreatePaymentOrderParams
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
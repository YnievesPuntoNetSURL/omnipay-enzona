<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentCheckout;

class GetPaymentCheckoutRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');
        return [
            'service' => 'payment',
            'endpoint' => 'payments/checkout/'.$this->getRequestInfo()->getTransaction_uuid(),
            'data' => [],
        ];
    }

    public function setRequestInfo(PaymentCheckoutQuery $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : PaymentCheckoutQuery
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
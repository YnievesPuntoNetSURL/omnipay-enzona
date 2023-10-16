<?php

namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePayment;

class CreatePaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');
        return [
            'service' => 'payment',
            'endpoint' => 'payments',
            'data' => $this->getPaymentInfo(),
        ];
    }

    public function setPaymentInfo(CreatePaymentParams $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getPaymentInfo(): CreatePaymentParams
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\ConfirmPayment;

class ConfirmPaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->getTransaction_uuid().'/confirm',
            'data' => $this->getRequestInfo(),
        ];
    }

    public function setRequestInfo(ConfirmPayment $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : ConfirmPayment
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
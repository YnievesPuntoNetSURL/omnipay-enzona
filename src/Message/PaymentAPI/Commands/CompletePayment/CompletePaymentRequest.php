<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CompletePayment;

class CompletePaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->getTransaction_uuid().'/complete',
            'data' => [],
        ];
    }

    public function setRequestInfo(CompletePayment $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : CompletePayment
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
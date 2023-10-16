<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateCancelPayment;

class CreateCancelPaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->getTransaction_uuid().'/cancel',
            'data' =>[],
        ];
    }

    public function setRequestInfo(CreateCancelPaymentParams $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : CreateCancelPaymentParams
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
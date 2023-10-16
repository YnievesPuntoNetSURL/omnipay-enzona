<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateRefundPayment;

class CreateRefundPaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->get_transaction_uuid().'/refund',
            'data' =>$this->getRequestInfo(),
        ];
    }

    public function setRequestInfo(CreateRefundPaymentParams $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : CreateRefundPaymentParams
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
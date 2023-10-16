<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentRefunds;

class PaymentRefundsRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->get_transaction_uuid().'/refunds',
            'data' => $this->getRequestInfo(),
        ];
    }

    public function setRequestInfo(PaymentRefundsQuery $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : PaymentRefundsQuery
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
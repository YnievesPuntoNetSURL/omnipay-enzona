<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentInfo;

class GetPaymentInfoRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');
        return [
            'service' => 'payment',
            'endpoint' => 'payments/'.$this->getRequestInfo()->getTransaction_uuid(),
            'data' => [],
        ];
    }

    public function setRequestInfo(PaymentInfoQuery $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : PaymentInfoQuery
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
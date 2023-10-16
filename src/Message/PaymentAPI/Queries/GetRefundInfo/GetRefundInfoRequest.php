<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetRefundInfo;

class GetRefundInfoRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/refund/'.$this->getRequestInfo()->getTransaction_uuid(),
            'data' => [],
        ];
    }

    public function setRequestInfo(RefundInfoQuery $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : RefundInfoQuery
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
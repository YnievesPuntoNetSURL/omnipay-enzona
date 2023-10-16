<?php

namespace Omnipay\Enzona\Message\PaymentAPI\GetRefunds;

class GetRefundsRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('refund_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments/refunds',
            'data' => $this->getRefundInfo(),
            // [
            //     'merchant_uuid' => $this->getMerchantUuid(),
            //     'transaction_uuid' => $this->getTransactionUuid(),
            //     'commerce_refund_id' => $this->getCommerceRefundId(),
            //     'limit' => $this->getLimit(),
            //     'offset' => $this->getOffset(),
            //     'status_filter' => $this->getStatusFilter(),
            //     'start_date_filter' => $this->getStartDateFilter(),
            //     'end_date_filter' => $this->getEndDateFilter(),
            //     'order_filter' => $this->getOrderFilter(),
            // ],
        ];
    }

    public function setRefundInfo($value)
    {
        return $this->setParameter('refund_info', $value);
    }

    public function getRefundInfo()
    {
        return $this->getParameter('refund_info');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }

    public function getMerchantUuid()
    {
        return $this->getParameter('merchant_uuid');
    }

    public function setMerchantUuid($value)
    {
        return $this->setParameter('merchant_uuid', $value);
    }

    public function getTransactionUuid()
    {
        return $this->getParameter('transaction_uuid');
    }

    public function setTransactionUuid($value)
    {
        return $this->setParameter('transaction_uuid', $value);
    }

    public function getCommerceRefundId()
    {
        return $this->getParameter('commerce_refund_id');
    }

    public function setCommerceRefundId($value)
    {
        return $this->setParameter('commerce_refund_id', $value);
    }

    public function getLimit()
    {
        return $this->getParameter('limit');
    }

    public function setLimit($value)
    {
        return $this->setParameter('limit', $value);
    }

    public function getOffset()
    {
        return $this->getParameter('offset');
    }

    public function setOffset($value)
    {
        return $this->setParameter('offset', $value);
    }

    public function getStatusFilter()
    {
        return $this->getParameter('status_filter');
    }

    public function setStatusFilter($value)
    {
        return $this->setParameter('status_filter', $value);
    }

    public function getStartDateFilter()
    {
        return $this->getParameter('start_date_filter');
    }

    public function setStartDateFilter($value)
    {
        return $this->setParameter('start_date_filter', $value);
    }

    public function getEndDateFilter()
    {
        return $this->getParameter('end_date_filter');
    }

    public function setEndDateFilter($value)
    {
        return $this->setParameter('end_date_filter', $value);
    }

    public function getOrderFilter()
    {
        return $this->getParameter('order_filter');
    }

    public function setOrderFilter($value)
    {
        return $this->setParameter('order_filter', $value);
    }
}

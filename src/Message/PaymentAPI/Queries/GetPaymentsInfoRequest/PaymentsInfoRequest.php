<?php

namespace Omnipay\Enzona\Message\PaymentAPI;

class PaymentsInfoRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('payments_info');

        return [
            'service' => 'payment',
            'endpoint' => 'payments',
            'data' => $this->getPaymentsInfo(),
            // [
            //     'merchant_uuid' => $this->getMerchantUuid(),
            //     'limit' => $this->getLimit(),
            //     'offset' => $this->getOffset(),
            //     'merchant_op_filter' => $this->getMerchantOpFilter(),
            //     'enzona_op_filter' => $this->getEnzonaOpFilter(),
            //     'status_filter' => $this->getStatusFilter(),
            //     'start_date_filter' => $this->getStartDateFilter(),
            //     'end_date_filter' => $this->getEndDateFilter(),
            //     'order_filter' => $this->getOrderFilter(),
            // ],
        ];
    }

    public function setPaymentsInfo($value)
    {
        return $this->setParameter('payments_info', $value);
    }

    public function getPaymentsInfo()
    {
        return $this->getParameter('payments_info');
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

    public function getMerchantOpFilter()
    {
        return $this->getParameter('merchant_op_filter');
    }

    public function setMerchantOpFilter($value)
    {
        return $this->setParameter('merchant_op_filter', $value);
    }

    public function getEnzonaOpFilter()
    {
        return $this->getParameter('enzona_op_filter');
    }

    public function setEnzonaOpFilter($value)
    {
        return $this->setParameter('enzona_op_filter', $value);
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

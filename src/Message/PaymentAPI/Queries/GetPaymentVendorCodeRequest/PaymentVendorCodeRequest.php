<?php

namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentVendorCodeRequest;
use Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentVendorCodeRequest\VendorCodeInfoRequest;

class PaymentVendorCodeRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        //$this->validate('amount', 'funding_source_uuid', 'payment_password', 'fingerprint', 'description', 'vendor_identity_code', 'currency', 'cash_advance', 'phone');

        return [
            'service' => 'payment',
            'endpoint' => 'payments',
            'data' => $this->getRequestInfo(),
            // [
            //     'amount' => $this->getAmount(),
            //     'funding_source_uuid' => $this->getFundingSourceUuid(),
            //     'payment_password' => $this->getPaymentPassword(),
            //     'fingerprint' => $this->getFingerprint(),
            //     'description' => $this->getDescription(),
            //     'vendor_identity_code' => $this->getVendorIdentityCode(),
            //     'currency' => $this->getCurrency(),
            //     'cash_advance' => $this->getCashAdvance(),
            //     'phone' => $this->getPhone(),
            // ],
        ];
    }

    public function setRequestInfo(VendorCodeInfoRequest $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo()
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getFundingSourceUuid()
    {
        return $this->getParameter('funding_source_uuid');
    }

    public function setFundingSourceUuid($value)
    {
        return $this->setParameter('funding_source_uuid', $value);
    }

    public function getPaymentPassword()
    {
        return $this->getParameter('payment_password');
    }

    public function setPaymentPassword($value)
    {
        return $this->setParameter('payment_password', $value);
    }

    public function getFingerprint()
    {
        return $this->getParameter('fingerprint');
    }

    public function setFingerprint($value)
    {
        return $this->setParameter('fingerprint', $value);
    }

    public function getVendorIdentityCode()
    {
        return $this->getParameter('vendor_identity_code');
    }

    public function setVendorIdentityCode($value)
    {
        return $this->setParameter('vendor_identity_code', $value);
    }

    public function getCashAdvance()
    {
        return $this->getParameter('cash_advance');
    }

    public function setCashAdvance($value)
    {
        return $this->setParameter('cash_advance', $value);
    }

    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }
}

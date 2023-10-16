<?php

namespace Omnipay\Enzona\Message\QRAPI;

class QRPaymentsRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('qr_code');

        return [
            'service' => 'qr',
            'endpoint' => 'qr/payments/'.$this->getQrCode(),
            'data' => [],
        ];
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }

    public function getQrCode()
    {
        return $this->getParameter('qr_code');
    }

    public function setQrCode($value)
    {
        return $this->setParameter('qr_code', $value);
    }
}

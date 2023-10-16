<?php

namespace Omnipay\Enzona\Message\QRAPI;

class QRInfoRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('qr_code');

        return [
            'service' => 'qr',
            'endpoint' => 'qr/'.$this->getQrCode(),
            'data' => [
                'cash_advance' => $this->getCashAdvance(),
            ],
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

    public function getCashAdvance()
    {
        return $this->getParameter('cash_advance');
    }

    public function setCashAdvance($value)
    {
        return $this->setParameter('cash_advance', $value);
    }
}

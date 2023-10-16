<?php

namespace Omnipay\Enzona\Message\QRAPI;

class MerchantRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('amount', 'currency', 'description', 'returnUrl', 'notifyUrl', 'terminal_id', 'permanent');

        return [
            'service' => 'qr',
            'endpoint' => 'qr/merchant',
            'data' => [
                'amount' => $this->getAmount(),
                'currency' => $this->getCurrency(),
                'description' => $this->getDescription(),
                'return_url' => $this->getReturnUrl(),
                'notify_url' => $this->getNotifyUrl(),
                'terminal_id' => $this->getTerminalId(),
                'permanent' => $this->getPermanent(),
            ],
        ];
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }

    public function getTerminalId()
    {
        return $this->getParameter('terminal_id');
    }

    public function setTerminalId($value)
    {
        return $this->setParameter('terminal_id', $value);
    }

    public function getPermanent()
    {
        return $this->getParameter('permanent');
    }

    public function setPermanent($value)
    {
        return $this->setParameter('permanent', $value);
    }
}

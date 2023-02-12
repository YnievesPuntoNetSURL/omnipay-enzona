<?php

namespace Omnipay\Enzona\Message\QRAPI;

class AccountRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('amount', 'currency', 'description');

        return array(
            'service' => 'qr',
            'endpoint' => 'qr/account',
            'data' => [
                'amount' => $this->getAmount(),
                'currency' => $this->getCurrency(),
                'description' => $this->getDescription()
            ]
        );
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
?>

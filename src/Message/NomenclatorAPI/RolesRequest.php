<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class RolesRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return [
            'service' => 'xmetnomenclator',
            'endpoint' => 'roles',
            'data' => [
                'accountant' => $this->getAccountant(),
            ],
        ];
    }

    public function setAccountant($value)
    {
        return $this->setParameter('accountant', $value);
    }

    public function getAccountant()
    {
        return $this->getParameter('accountant');
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}

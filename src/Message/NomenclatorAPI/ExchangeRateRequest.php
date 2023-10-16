<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class ExchangeRateRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return [
            'service' => 'xmetnomenclator',
            'endpoint' => 'exchangeRate',
            'data' => [],
        ];
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}

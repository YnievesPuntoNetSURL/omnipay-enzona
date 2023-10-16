<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class MunicipalityRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return [
            'service' => 'xmetnomenclator',
            'endpoint' => 'municipality',
            'data' => [],
        ];
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}

<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class TransfersConceptRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return [
            'service' => 'xmetnomenclator',
            'endpoint' => 'transfersConcept',
            'data' => [],
        ];
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}

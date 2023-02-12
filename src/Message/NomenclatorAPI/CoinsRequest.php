<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class CoinsRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return array(
            'service' => 'xmetnomenclator',
            'endpoint' => 'coins',
            'data' => []
        );
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
?>

<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class ServicesRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return array(
            'service' => 'xmetnomenclator',
            'endpoint' => 'services',
            'data' => []
        );
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
?>

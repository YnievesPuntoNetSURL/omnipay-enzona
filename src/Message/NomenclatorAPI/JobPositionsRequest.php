<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class JobPositionsRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return array(
            'service' => 'xmetnomenclator',
            'endpoint' => 'jobPositions',
            'data' => []
        );
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
?>

<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class OnatConceptRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return array(
            'service' => 'xmetnomenclator',
            'endpoint' => 'onatConcept',
            'data' => []
        );
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
?>

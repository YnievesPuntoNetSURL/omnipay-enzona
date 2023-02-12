<?php

namespace Omnipay\Enzona\Message\NomenclatorAPI;

class AccountingOperRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        return array(
            'service' => 'xmetnomenclator',
            'endpoint' => 'accountingOper',
            'data' => []
        );
    }

    protected function getHttpMethod()
    {
        return 'GET';
    }
}
?>

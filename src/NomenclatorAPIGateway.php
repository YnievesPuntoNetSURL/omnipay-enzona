<?php

namespace Omnipay\Enzona;

class NomenclatorAPIGateway extends BaseGateway
{
    public function getName()
    {
        return 'NomenclatorAPIGateway';
    }

    public function getExchangeRate()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\ExchangeRateRequest', array());
    }

    public function getServices()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\ServicesRequest', array());
    }

    public function getCCosts()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\CCostsRequest', array());
    }

    public function getAccountingOper()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\AccountingOperRequest', array());
    }

    public function getCoins()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\CoinsRequest', array());
    }

    public function getMunicipality()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\MunicipalityRequest', array());
    }

    public function getRoles()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\RolesRequest', array());
    }

    public function getTransfersConcept()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\TransfersConceptRequest', array());
    }

    public function getJobPositions()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\JobPositionsRequest', array());
    }

    public function getOnatConcept()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\OnatConceptRequest', array());
    }
}
?>

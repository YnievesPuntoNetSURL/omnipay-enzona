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
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\ExchangeRateRequest', []);
    }

    public function getServices()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\ServicesRequest', []);
    }

    public function getCCosts()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\CCostsRequest', []);
    }

    public function getAccountingOper()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\AccountingOperRequest', []);
    }

    public function getCoins()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\CoinsRequest', []);
    }

    public function getMunicipality()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\MunicipalityRequest', []);
    }

    public function getRoles()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\RolesRequest', []);
    }

    public function getTransfersConcept()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\TransfersConceptRequest', []);
    }

    public function getJobPositions()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\JobPositionsRequest', []);
    }

    public function getOnatConcept()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\NomenclatorAPI\OnatConceptRequest', []);
    }
}

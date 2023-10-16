<?php

namespace Omnipay\Enzona;

class QRAPIGateway extends BaseGateway
{
    public function getName()
    {
        return 'QRAPIGateway';
    }

    public function createAccount(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\AccountRequest', $parameters);
    }

    public function getQRInfo(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\QRInfoRequest', $parameters);
    }

    public function getQRPayments(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\QRPaymentsRequest', $parameters);
    }

    public function createMerchant(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\MerchantRequest', $parameters);
    }
}

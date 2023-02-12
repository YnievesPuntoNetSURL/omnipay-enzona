<?php

namespace Omnipay\Enzona;

class QRAPIGateway extends BaseGateway
{
    public function getName()
    {
        return 'QRAPIGateway';
    }

    public function createAccount(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\AccountRequest', $parameters);
    }

    public function getQRInfo(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\QRInfoRequest', $parameters);
    }

    public function getQRPayments(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\QRPaymentsRequest', $parameters);
    }

    public function createMerchant(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\QRAPI\MerchantRequest', $parameters);
    }
}
?>

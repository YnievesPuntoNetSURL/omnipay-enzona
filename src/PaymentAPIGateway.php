<?php

namespace Omnipay\Enzona;

class PaymentAPIGateway extends BaseGateway
{
    public function getName()
    {
        return 'PaymentAPIGateway';
    }

    /*
     * 59940314 Corporativo Jefe de comercio electrónico.
     */

    public function paymentConfirm(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\ConfirmPayment\ConfirmPaymentRequest', $parameters);
    }

    public function paymentComplete(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CompletePayment\CompletePaymentRequest', $parameters);
    }

    public function getPaymentRefunds(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentRefunds\PaymentRefundsRequest', $parameters);
    }

    public function getRefundInfo(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetRefundInfo\GetRefundInfoRequest', $parameters);
    }

    public function getRefunds(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\GetRefunds\GetRefundsRequest', $parameters);
    }

    // TODO: Review this endpoint, error during development process
    public function createPayment(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePayment\CreatePaymentRequest', $parameters);
    }

    public function getPaymentsInfo(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentsInfoRequest\PaymentsInfoRequest', $parameters);
    }

    public function getPaymentInfo(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentInfo\GetPaymentInfoRequest', $parameters);
    }

    public function paymentCheckout(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentCheckout\GetPaymentCheckoutRequest', $parameters);
    }

    // TODO: Review this endpoint, error during development process
    public function paymentVendorCode(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentVendorCodeRequest\PaymentVendorCodeRequest', $parameters);
    }

    public function createProductPayment(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CreateProductPayment\ProductPaymentRequest', $parameters);
    }

    public function createPaymentOrder(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePaymentOrder\CreatePaymentOrderRequest', $parameters);
    }

    public function paymentCancel(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CreateCancelPayment\CreateCancelPaymentRequest', $parameters);
    }

    public function paymentRefund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Enzona\Message\PaymentAPI\Commands\CreateRefundPayment\CreateRefundPaymentRequest', $parameters);
    }
}

<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateProductPayment;

class ProductPaymentRequest extends \Omnipay\Enzona\Message\AbstractRequest
{
    public function getData()
    {
        $this->validate('request_info');

        return [
            'service' => 'payment',
            'endpoint' => 'shop',
            'data' => $this->getRequestInfo(),
        ];
    }

    public function setRequestInfo(ProductPaymentQuery $value)
    {
        return $this->setParameter('request_info', $value);
    }

    public function getRequestInfo() : ProductPaymentQuery
    {
        return $this->getParameter('request_info');
    }

    protected function getHttpMethod()
    {
        return 'POST';
    }
}
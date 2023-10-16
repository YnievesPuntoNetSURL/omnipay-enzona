<?php

namespace Omnipay\Enzona\Message;

use Omnipay\Common\Message\RequestInterface;
use Omnipay\Common\Message\AbstractResponse as OmiPayAbstractResponse;

abstract class AbstractResponse extends OmiPayAbstractResponse
{
    protected $statusCode;

    public function __construct(RequestInterface $request, $data, $statusCode = 200)
    {
        parent::__construct($request, $data);
        $this->statusCode = $statusCode;
    }

    public function isSuccessful()
    {
        return empty($this->data['error']) && $this->getCode() < 400;
    }
}

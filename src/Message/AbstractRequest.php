<?php

namespace Omnipay\Enzona\Message;

use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\AbstractRequest as OmniPayAbstractRequest;

abstract class AbstractRequest extends OmniPayAbstractRequest
{
    protected $endpointURL = 'https://api.enzona.net/';

    public function getData()
    {
        return $this->getExternalReference();
    }

    public function setExternalReference($value)
    {
        return $this->setParameter('external_reference', $value);
    }

    public function getExternalReference()
    {
        return $this->getParameter('external_reference');
    }

    public function getConsumerKey()
    {
        return $this->getParameter('consumer_key');
    }

    public function setConsumerKey($value)
    {
        return $this->setParameter('consumer_key', $value);
    }

    public function getConsumerSecret()
    {
        return $this->getParameter('consumer_secret');
    }

    public function setConsumerSecret($value)
    {
        return $this->setParameter('consumer_secret', $value);
    }

    protected function getEndpoint($service, $endpoint = '')
    {
        if ($endpoint != '') {
            $service .= '/v1.0.0/'.$endpoint;
        }

        return $this->endpointURL.$service;
    }

    /**
     * Get HTTP Method.
     *
     * This is nearly always POST but can be over-ridden in sub classes.
     *
     * @return string
     */
    protected function getHttpMethod()
    {
        return 'POST';
    }

    public function sendData($data)
    {
        // Guzzle HTTP Client createRequest does funny things when a GET request
        // has attached data, so don't send the data if the method is GET.
        $options = JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK;
        
        if ($this->getHttpMethod() == 'GET') {
            $requestUrl = $this->getEndpoint($data['service'], $data['endpoint']).'?'.http_build_query($data['data']);
            $body = null;
        } else {
            $requestUrl = $this->getEndpoint($data['service'], $data['endpoint']);
            $body = $this->toJSON($data['data'], $options);
        }

        // Might be useful to have some debug code here, Enzona especially can be
        // a bit fussy about data formats and ordering.  Perhaps hook to whatever
        // logging engine is being used.
        // TODO: Uncomment to debug request
        //echo 'Data == '.json_encode($data)."\n";
        //echo 'Request URL == '.$requestUrl."\n";
        //echo 'Body == '.$body."\n";
        try {
            $httpResponse = $this->httpClient->request(
                $this->getHttpMethod(),
                $requestUrl,
                [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.$this->getToken(),
                    'Content-type' => 'application/json',
                ],
                $body
            );
            // Empty response body should be parsed also as and empty array
            $body = (string) $httpResponse->getBody()->getContents();
            $jsonToArrayResponse = ! empty($body) ? json_decode($body, true) : [];

            return $this->response = $this->createResponse($jsonToArrayResponse, $httpResponse->getStatusCode());
        } catch (\Exception $e) {
            throw new InvalidResponseException(
                'Error communicating with payment gateway: '.$e->getMessage(),
                $e->getCode()
            );
        }
    }

    public function toJSON($data, $options = 0)
    {
        if (version_compare(phpversion(), '5.4.0', '>=') === true) {
            return json_encode($data, $options);
        }

        return str_replace('\\/', '/', json_encode($data, $options));
    }

    protected function createResponse($data, $statusCode)
    {
        return $this->response = new RestResponse($this, $data, $statusCode);
    }
}

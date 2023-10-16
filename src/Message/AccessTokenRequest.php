<?php

namespace Omnipay\Enzona\Message;

class AccessTokenRequest extends AbstractRequest
{
    public function getData()
    {
        return [
            'grant_type' => 'client_credentials',
            'scope' => 'enzona_business_payment',
        ];
    }

    public function sendData($data)
    {
        $url = $this->getEndpoint('token');

        $body = $data ? http_build_query($data, '', '&') : null;
        $headers = [
            'content-type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic '.base64_encode($this->getConsumerKey().':'.$this->getConsumerSecret()),
        ];
        $httpResponse = $this->httpClient->request(
            'POST',
            $url,
            $headers,
            $body
        );

        $body = (string) $httpResponse->getBody()->getContents();
        $jsonToArrayResponse = ! empty($body) ? json_decode($body, true) : [];

        return $this->response = new RestResponse($this, $jsonToArrayResponse, $httpResponse->getStatusCode());
    }
}

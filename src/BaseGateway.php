<?php

namespace Omnipay\Enzona;

use Omnipay\Common\AbstractGateway;

class BaseGateway extends AbstractGateway
{
    protected $endpointURL = 'https://api.enzona.net/';

    public function getName()
    {
        return 'BaseGateway';
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

    /**
     * Create OAuth 2.0 access token request.
     *
     * @return \Omnipay\Enzona\Message\AccessTokenRequest
     */
    public function createToken()
    {
        return $this->createRequest('\Omnipay\Enzona\Message\AccessTokenRequest', []);
    }

    /**
     * Get OAuth 2.0 access token.
     *
     * @param  bool  $createIfNeeded [optional] - If there is not an active token present, should we create one?
     * @return string
     */
    public function getToken($createIfNeeded = true)
    {
        if ($createIfNeeded && ! $this->hasToken()) {
            $response = $this->createToken()->send();
            if ($response->isSuccessful()) {
                $data = $response->getData();
                if (isset($data['access_token'])) {
                    $this->setToken($data['access_token']);
                    $this->setTokenExpires(time() + $data['expires_in']);
                }
            }
        }

        return $this->getParameter('token');
    }

    /**
     * Set OAuth 2.0 access token.
     *
     * @param  string  $value
     * @return RestGateway provides a fluent interface
     */
    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }

    /**
     * Get OAuth 2.0 access token expiry time.
     *
     * @return int
     */
    public function getTokenExpires()
    {
        return $this->getParameter('tokenExpires');
    }

    /**
     * Set OAuth 2.0 access token expiry time.
     *
     * @param  int  $value
     * @return RestGateway provides a fluent interface
     */
    public function setTokenExpires($value)
    {
        return $this->setParameter('tokenExpires', $value);
    }

    /**
     * Is there a bearer token and is it still valid?
     *
     * @return bool
     */
    public function hasToken()
    {
        $token = $this->getParameter('token');

        $expires = $this->getTokenExpires();
        if (! empty($expires) && ! is_numeric($expires)) {
            $expires = strtotime($expires);
        }

        return ! empty($token) && time() < $expires;
    }

    /**
     * Create Request
     *
     * This overrides the parent createRequest function ensuring that the OAuth
     * 2.0 access token is passed along with the request data -- unless the
     * request is a AccessTokenRequest in which case no token is needed.  If no
     * token is available then a new one is created (e.g. if there has been no
     * token request or the current token has expired).
     *
     * @param  string  $class
     * @return \Omnipay\Enzona\Message\AbstractRestRequest
     */
    public function createRequest($class, array $parameters = [])
    {
        if (! $this->hasToken() && $class != '\Omnipay\Enzona\Message\AccessTokenRequest') {
            // This will set the internal token parameter which the parent
            // createRequest will find when it calls getParameters().
            $this->getToken(true);
        }

        return parent::createRequest($class, $parameters);
    }

    public function purchase(array $parameters = [])
    {
        return false;
    }

    public function acceptNotification($options = [])
    {
        return false;
    }

    public function authorize(array $parameters = [])
    {
        return false;
    }

    public function completeAuthorize(array $parameters = [])
    {
        return false;
    }

    public function capture(array $parameters = [])
    {
        return false;
    }

    public function completePurchase(array $parameters = [])
    {
        return false;
    }

    public function refund(array $parameters = [])
    {
        return false;
    }

    public function fetchTransaction(array $parameters = [])
    {
        return false;
    }

    public function void(array $parameters = [])
    {
        return false;
    }

    public function createCard(array $parameters = [])
    {
        return false;
    }

    public function updateCard(array $parameters = [])
    {
        return false;
    }

    public function deleteCard(array $parameters = [])
    {
        return false;
    }
}

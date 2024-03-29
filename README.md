# Omnipay: Enzona

**Enzona** driver for the Omnipay PHP payment processing library

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP. This package implements Enzona support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply require `ynievespuntonetsurl/omnipay-enzona` with Composer:

```bash
#!/bin/bash
composer require ynievespuntonetsurl/omnipay-enzona
```

## Basic Usage

The following gateways are provided by this package:

* [Enzona_NomenclatorAPI](https://api.enzona.net/store/apis/info?name=XMET_NomenclatorAPI&version=v1.0.0&provider=admin)
  * getExchangeRate()
  * getServices()
  * getCCosts()
  * getAccountingOper()
  * getCoins()
  * getMunicipality()
  * getRoles()
  * getTransfersConcept()
  * getgetJobPositions()
  * getOnatConcept()
* [Enzona_QRAPI](https://api.enzona.net/store/apis/info?name=QRAPI&version=v1.0.0&provider=admin)
  * createAccount($parameters = array())
  * getQRInfo($parameters = array())
  * getQRPayments($parameters = array())
  * createMerchant($parameters = array())
* [Enzona_PaymentAPI](https://api.enzona.net/store/apis/info?name=PaymentAPI&version=v1.0.0&provider=admin)
  * getPaymentsRefunds($parameters = array())
  * createPayment($parameters = array())
  * getPaymentsInfo($parameters = array())

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Quirks

The transaction reference obtained from the purchase() response can't be used to refund a purchase. The transaction reference from the completePurchase() response is the one that should be used.

## Out Of Scope

Omnipay does not cover recurring payments or billing agreements, and so those features are not included in this package. Extensions to this gateway are always welcome.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/ynievespuntonetsurl/omnipay-enzona/issues),
or better yet, fork the library and submit a pull request.

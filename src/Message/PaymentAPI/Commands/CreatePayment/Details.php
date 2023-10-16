<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePayment;

class Details {
    public float $shipping; // json:shipping Required
    public float $discount; // json:discount Required
    public float $tax; // json:tax Required
    public float $tip; // json:tip Required

    /**
     * @param float $shipping
     * @param float $discount
     * @param float $tax
     * @param float $tip
     */
    public function __construct(float $shipping, float $discount, float $tax, float $tip) {
        $this->shipping = $shipping;
        $this->discount = $discount;
        $this->tax = $tax;
        $this->tip = $tip;
    }
}
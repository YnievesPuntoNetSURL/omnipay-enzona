<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePayment;

class Amount {
    public float $total;
    public Details $details;

    /**
     * @param float $total
     * @param Details $details
     */
    public function __construct(float $total, Details $details) {
        $this->total = $total;
        $this->details = $details;
    }
}
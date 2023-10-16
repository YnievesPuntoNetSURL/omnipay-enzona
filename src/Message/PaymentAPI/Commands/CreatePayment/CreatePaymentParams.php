<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePayment;

class CreatePaymentParams {
    public string $merchant_uuid;
    public int $merchant_op_id;
    public Amount $amount;
    public string $description;
    public string $return_url;
    public string $currency;
    public array $items;
    public int $invoice_number;
    public string $cancel_url;
    public string $buyer_identity_code;
    public int $terminal_id;

    /**
     * @param string
     * @param int
     * @param Amount
     * @param string
     * @param string
     * @param string
     * @param array
     * @param int
     * @param string
     * @param string
     * @param int
     */
    public function __construct(string $merchant_uuid, int $merchant_op_id, Amount $amount, string $description, string $return_url, string $currency, array $items, int $invoice_number, string $cancel_url, string $buyer_identity_code, int $terminal_id) {
        $this->merchant_uuid = $merchant_uuid;
        $this->merchant_op_id = $merchant_op_id;
        $this->amount = $amount;
        $this->description = $description;
        $this->return_url = $return_url;
        $this->currency = $currency;
        $this->items = $items;
        $this->invoice_number = $invoice_number;
        $this->cancel_url = $cancel_url;
        $this->buyer_identity_code = $buyer_identity_code;
        $this->terminal_id = $terminal_id;
    }
}
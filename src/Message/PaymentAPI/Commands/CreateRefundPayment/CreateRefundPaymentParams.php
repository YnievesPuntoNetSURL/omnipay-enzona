<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateRefundPayment;

class CreateRefundPaymentParams
{
	private string $transaction_uuid ;
	public amount $amount;
	public string $commerce_refund_id;
	public string $username;
	public string $description;

	public function __construct(
		string $transaction_uuid ,
		amount $amount,
		string $commerce_refund_id,
		string $username,
		string $description
	) {
		$this->transaction_uuid  = $transaction_uuid ;
		$this->amount = $amount;
		$this->commerce_refund_id = $commerce_refund_id;
		$this->username = $username;
		$this->description = $description;
	}

	public function get_transaction_uuid (): string
	{
		return $this->transaction_uuid ;
	}

	public function get_amount(): amount
	{
		return $this->amount;
	}

	public function get_commerce_refund_id(): string
	{
		return $this->commerce_refund_id;
	}

	public function get_username(): string
	{
		return $this->username;
	}

	public function get_description(): string
	{
		return $this->description;
	}

	public function set_transaction_uuid (string $transaction_uuid ): void
	{
		$this->transaction_uuid  = $transaction_uuid ;
	}

	public function set_amount(amount $amount): void
	{
		$this->amount = $amount;
	}

	public function set_commerce_refund_id(string $commerce_refund_id): void
	{
		$this->commerce_refund_id = $commerce_refund_id;
	}

	public function set_username(string $username): void
	{
		$this->username = $username;
	}

	public function set_description(string $description): void
	{
		$this->description = $description;
	}
}

class amount
{
	public string $total;

	public function __construct(string $total)
	{
		$this->total = $total;
	}

	public function get_total(): string
	{
		return $this->total;
	}

	public function set_total(string $total): void
	{
		$this->total = $total;
	}
}
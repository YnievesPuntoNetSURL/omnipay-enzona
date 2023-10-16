<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreatePaymentOrder;

class CreatePaymentOrderParams
{
	public int $merchant_op_id;
	public int $amount;
	public string $description;
	public string $currency;

	public function __construct(
		int $merchant_op_id,
		int $amount,
		string $description,
		string $currency
	) {
		$this->merchant_op_id = $merchant_op_id;
		$this->amount = $amount;
		$this->description = $description;
		$this->currency = $currency;
	}

	public function get_merchant_op_id(): int
	{
		return $this->merchant_op_id;
	}

	public function get_amount(): int
	{
		return $this->amount;
	}

	public function get_description(): string
	{
		return $this->description;
	}

	public function get_currency(): string
	{
		return $this->currency;
	}

	public function set_merchant_op_id(int $merchant_op_id): void
	{
		$this->merchant_op_id = $merchant_op_id;
	}

	public function set_amount(int $amount): void
	{
		$this->amount = $amount;
	}

	public function set_description(string $description): void
	{
		$this->description = $description;
	}

	public function set_currency(string $currency): void
	{
		$this->currency = $currency;
	}
}
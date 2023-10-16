<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentVendorCodeRequest;

// This is a autogenerated file:VendorCodeInfoRequest

class VendorCodeInfoRequest {
    public string $amount;
	public string $funding_source_uuid;
	public string $payment_password;
	public string $fingerprint;
	public string $description;
	public string $vendor_identity_code;
	public string $currency;
	public string $cash_advance;
	public string $phone;

	public function __construct(
		string $amount,
		string $funding_source_uuid,
		string $payment_password,
		string $fingerprint,
		string $description,
		string $vendor_identity_code,
		string $currency,
		string $cash_advance,
		string $phone
	) {
		$this->amount = $amount;
		$this->funding_source_uuid = $funding_source_uuid;
		$this->payment_password = $payment_password;
		$this->fingerprint = $fingerprint;
		$this->description = $description;
		$this->vendor_identity_code = $vendor_identity_code;
		$this->currency = $currency;
		$this->cash_advance = $cash_advance;
		$this->phone = $phone;
	}

	public function get_amount(): string
	{
		return $this->amount;
	}

	public function get_funding_source_uuid(): string
	{
		return $this->funding_source_uuid;
	}

	public function get_payment_password(): string
	{
		return $this->payment_password;
	}

	public function get_fingerprint(): string
	{
		return $this->fingerprint;
	}

	public function get_description(): string
	{
		return $this->description;
	}

	public function get_vendor_identity_code(): string
	{
		return $this->vendor_identity_code;
	}

	public function get_currency(): string
	{
		return $this->currency;
	}

	public function get_cash_advance(): string
	{
		return $this->cash_advance;
	}

	public function get_phone(): string
	{
		return $this->phone;
	}

	public function set_amount(string $amount): void
	{
		$this->amount = $amount;
	}

	public function set_funding_source_uuid(string $funding_source_uuid): void
	{
		$this->funding_source_uuid = $funding_source_uuid;
	}

	public function set_payment_password(string $payment_password): void
	{
		$this->payment_password = $payment_password;
	}

	public function set_fingerprint(string $fingerprint): void
	{
		$this->fingerprint = $fingerprint;
	}

	public function set_description(string $description): void
	{
		$this->description = $description;
	}

	public function set_vendor_identity_code(string $vendor_identity_code): void
	{
		$this->vendor_identity_code = $vendor_identity_code;
	}

	public function set_currency(string $currency): void
	{
		$this->currency = $currency;
	}

	public function set_cash_advance(string $cash_advance): void
	{
		$this->cash_advance = $cash_advance;
	}

	public function set_phone(string $phone): void
	{
		$this->phone = $phone;
	}
}


<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateProductPayment;

class ProductPaymentQuery
{
	public string $cart_id;
	public amount $amount;
	public string $funding_source_uuid;
	public string $payment_password;
	public string $fingerprint;
	public string $description;
	public string $currency;
	public string $merchant_uuid;
	public string $id_shop;
	/** @var items[] */
	public array $items;

	/**
	 * @param items[] $items
	 */
	public function __construct(
		string $cart_id,
		amount $amount,
		string $funding_source_uuid,
		string $payment_password,
		string $fingerprint,
		string $description,
		string $currency,
		string $merchant_uuid,
		string $id_shop,
		array $items
	) {
		$this->cart_id = $cart_id;
		$this->amount = $amount;
		$this->funding_source_uuid = $funding_source_uuid;
		$this->payment_password = $payment_password;
		$this->fingerprint = $fingerprint;
		$this->description = $description;
		$this->currency = $currency;
		$this->merchant_uuid = $merchant_uuid;
		$this->id_shop = $id_shop;
		$this->items = $items;
	}

	public function get_cart_id(): string
	{
		return $this->cart_id;
	}

	public function get_amount(): amount
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

	public function get_currency(): string
	{
		return $this->currency;
	}

	public function get_merchant_uuid(): string
	{
		return $this->merchant_uuid;
	}

	public function get_id_shop(): string
	{
		return $this->id_shop;
	}

	/**
	 * @return items[]
	 */
	public function get_items(): array
	{
		return $this->items;
	}

	public function set_cart_id(string $cart_id): void
	{
		$this->cart_id = $cart_id;
	}

	public function set_amount(amount $amount): void
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

	public function set_currency(string $currency): void
	{
		$this->currency = $currency;
	}

	public function set_merchant_uuid(string $merchant_uuid): void
	{
		$this->merchant_uuid = $merchant_uuid;
	}

	public function set_id_shop(string $id_shop): void
	{
		$this->id_shop = $id_shop;
	}

	/**
	 * @param items[] $items
	 */
	public function set_items(array $items): void
	{
		$this->items = $items;
	}
}

class amount
{
	public float $total;
	public float $shipping;

	public function __construct(float $total, float $shipping)
	{
		$this->total = $total;
		$this->shipping = $shipping;
	}

	public function get_total(): float
	{
		return $this->total;
	}

	public function get_shipping(): float
	{
		return $this->shipping;
	}

	public function set_total(float $total): void
	{
		$this->total = $total;
	}

	public function set_shipping(float $shipping): void
	{
		$this->shipping = $shipping;
	}
}

class items
{
	public int $quantity;
	public float $price;
	public string $product_id;
	public string $product_name;

	public function __construct(
		int $quantity,
		float $price,
		string $product_id,
		string $product_name
	) {
		$this->quantity = $quantity;
		$this->price = $price;
		$this->product_id = $product_id;
		$this->product_name = $product_name;
	}

	public function get_quantity(): int
	{
		return $this->quantity;
	}

	public function get_price(): float
	{
		return $this->price;
	}

	public function get_product_id(): string
	{
		return $this->product_id;
	}

	public function get_product_name(): string
	{
		return $this->product_name;
	}

	public function set_quantity(int $quantity): void
	{
		$this->quantity = $quantity;
	}

	public function set_price(float $price): void
	{
		$this->price = $price;
	}

	public function set_product_id(string $product_id): void
	{
		$this->product_id = $product_id;
	}

	public function set_product_name(string $product_name): void
	{
		$this->product_name = $product_name;
	}
}
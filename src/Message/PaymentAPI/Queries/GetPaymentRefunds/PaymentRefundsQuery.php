<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Queries\GetPaymentRefunds;

class PaymentRefundsQuery
{
	private string $transaction_uuid;
	public string $limit;
	public string $offset;
	public string $status_filter;
	public string $start_date_filter;
	public string $end_date_filter;
	public string $order_filter;

	public function __construct(
		string $transaction_uuid,
		string $limit,
		string $offset,
		string $status_filter,
		string $start_date_filter,
		string $end_date_filter,
		string $order_filter
	) {
		$this->transaction_uuid = $transaction_uuid;
		$this->limit = $limit;
		$this->offset = $offset;
		$this->status_filter = $status_filter;
		$this->start_date_filter = $start_date_filter;
		$this->end_date_filter = $end_date_filter;
		$this->order_filter = $order_filter;
	}

	public function get_transaction_uuid(): string
	{
		return $this->transaction_uuid;
	}

	public function get_limit(): string
	{
		return $this->limit;
	}

	public function get_offset(): string
	{
		return $this->offset;
	}

	public function get_status_filter(): string
	{
		return $this->status_filter;
	}

	public function get_start_date_filter(): string
	{
		return $this->start_date_filter;
	}

	public function get_end_date_filter(): string
	{
		return $this->end_date_filter;
	}

	public function get_order_filter(): string
	{
		return $this->order_filter;
	}

	public function set_transaction_uuid(string $transaction_uuid): void
	{
		$this->transaction_uuid = $transaction_uuid;
	}

	public function set_limit(string $limit): void
	{
		$this->limit = $limit;
	}

	public function set_offset(string $offset): void
	{
		$this->offset = $offset;
	}

	public function set_status_filter(string $status_filter): void
	{
		$this->status_filter = $status_filter;
	}

	public function set_start_date_filter(string $start_date_filter): void
	{
		$this->start_date_filter = $start_date_filter;
	}

	public function set_end_date_filter(string $end_date_filter): void
	{
		$this->end_date_filter = $end_date_filter;
	}

	public function set_order_filter(string $order_filter): void
	{
		$this->order_filter = $order_filter;
	}
}
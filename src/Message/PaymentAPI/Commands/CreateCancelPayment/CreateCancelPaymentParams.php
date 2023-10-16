<?php
namespace Omnipay\Enzona\Message\PaymentAPI\Commands\CreateCancelPayment;

class CreateCancelPaymentParams
{
	private string $transaction_uuid;
	
	public function __construct(string $transaction_uuid) 
	{
		$this->transaction_uuid = $transaction_uuid;
	}

	public function getTransaction_uuid(): string 
	{
        return $this->transaction_uuid;
    } 

	public function set_transaction_uuid(string $transaction_uuid): void
	{
		$this->transaction_uuid = $transaction_uuid;
	}
}
<?php

namespace Dena\IranPayment\Exceptions;

use Dena\IranPayment\Exceptions\IranPaymentException;

class InvalidDataException extends IranPaymentException
{

	const UNKNOWN			= 0;
	const INVALID_USER_ID	= 1;
	const INVALID_AMOUNT	= 2;
	const INVALID_CURRENCY	= 3;
	const INVALID_CALLBACK	= 4;
	const INVALID_RESNUM	= 5;

	public static $errors = [
		0	=> 'Unknown Error:',
		1	=> 'User not found:',
		2	=> 'Amount is invalid:',
		3	=> 'Currency is invalid:',
		4	=> 'Callback url is invalid:',
		5	=> 'Reservation Number url is invalid:',
	];

	public function __construct($error_id = 0)
	{
		$this->error_id = intval($error_id);

		parent::__construct(@self::$errors[$this->error_id].' #'.$this->error_id, $this->error_id);
	}
}
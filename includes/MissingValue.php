<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * Exception for missing value usage
 *
 * @package Mireiawen\Configuration
 * @copyright 2020 Mira "Mireiawen" Manninen
 */
class MissingValue extends \UnexpectedValueException
{
	/**
	 * Constructor that sets the message
	 *
	 * @param string $message
	 *    The uninitialized variable
	 *
	 * @param int $code
	 *    The code
	 *
	 * @param \Throwable|NULL $previous
	 *    Previous exception
	 */
	public function __construct(string $message = '', int $code = 0, \Throwable $previous = NULL)
	{
		parent::__construct(\sprintf(\_('The key %s is missing'), $message), $code, $previous);
	}
}
<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * Exception for missing and invalid configuration files
 *
 * @package Mireiawen\Configuration
 * @copyright 2020 Mira "Mireiawen" Manninen
 */
class InvalidFile extends \RuntimeException
{
	/**
	 * Constructor that sets the message
	 *
	 * @param string $message
	 *    The invalid file name
	 *
	 * @param int $code
	 *    The code
	 *
	 * @param \Throwable|NULL $previous
	 *    Previous exception
	 */
	public function __construct(string $message = '', int $code = 0, \Throwable $previous = NULL)
	{
		parent::__construct(\sprintf(\_('The configuration file %s is missing or invalid format'), $message), $code, $previous);
	}
}
<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * Exception for missing value usage
 *
 * @package Mireiawen\Configuration
 * @copyright 2020 Mira "Mireiawen" Manninen
 */
class MissingExtension extends \UnexpectedValueException
{
	/**
	 * Constructor that sets the message
	 *
	 * @param string $message
	 *    The missing extension
	 *
	 * @param int $code
	 *    The code
	 *
	 * @param \Throwable|NULL $previous
	 *    Previous exception
	 */
	public function __construct(string $message = '', int $code = 0, \Throwable $previous = NULL)
	{
		parent::__construct(\sprintf(\_('The extension %s is required'), $message), $code, $previous);
	}
}
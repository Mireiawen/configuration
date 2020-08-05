<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * JSON configuration file helper
 *
 * @package Mireiawen\Configuration
 */
class JSON extends ConfigurationBase
{
	/**
	 * Configuration values themselves
	 *
	 * @var array
	 */
	protected $data;
	
	/**
	 * Config constructor
	 *
	 * @param string $filename
	 *    The JSON file name to read
	 *
	 * @throws MissingExtension
	 *    When expected extensions are not available
	 *
	 * @throws InvalidFile
	 *    When the configuration file is missing or not readable
	 */
	public function __construct(string $filename)
	{
		if (!\extension_loaded('json'))
		{
			throw new MissingExtension('json');
		}
		
		if (!\is_readable($filename))
		{
			throw new InvalidFile($filename);
		}
		
		try
		{
			$this->data = \json_decode(\file_get_contents($filename), TRUE, 512, JSON_THROW_ON_ERROR);
		}
		catch (\JsonException $exception)
		{
			throw new InvalidFile($filename, 0, $exception);
		}
	}
	
	/**
	 * Check if the configuration variable exists and is set
	 *
	 * @param string $key
	 *    The key to check
	 *
	 * @return bool
	 *    TRUE if the value exists and is set,
	 *    FALSE if the value does not exist
	 */
	public function Has(string $key) : bool
	{
		return isset($this->data[$key]);
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param mixed $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return mixed
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	public function Get(string $key, $default = NULL)
	{
		if (isset($this->data[$key]))
		{
			return $this->data[$key];
		}
		
		if ($default === NULL)
		{
			throw new MissingValue($key);
		}
		
		return $default;
	}
}

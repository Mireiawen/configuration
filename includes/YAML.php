<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * YAML configuration file helper
 *
 * @package Mireiawen\Configuration
 */
class YAML extends ConfigurationBase
{
	/**
	 * Configuration values themselves
	 *
	 * @var array
	 */
	protected array $data;
	
	/**
	 * Config constructor
	 *
	 * @param string|null $filename
	 *    The YAML file name to read
	 *
	 * @throws MissingExtension
	 *    When expected extensions are not available
	 *
	 * @throws InvalidFile
	 *    When the configuration file is missing or not readable
	 */
	public function __construct(?string $filename = NULL)
	{
		if (!\extension_loaded('yaml'))
		{
			throw new MissingExtension('yaml');
		}
		
		if ($filename !== NULL)
		{
			$this->Load($filename);
		}
	}
	
	/**
	 * Load a configuration file
	 *
	 * @param string $filename
	 *    The configuration file to load
	 *
	 * @throws InvalidFile
	 *    In case of unable to read or process the configuration file
	 */
	public function Load(string $filename) : void
	{
		if (!\is_readable($filename))
		{
			throw new InvalidFile($filename);
		}
		
		$this->data = \yaml_parse_file($filename);
		
		$this->loaded = TRUE;
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
		try
		{
			$this->GetSubkey($key, NULL, $this->data);
		}
			/** @noinspection BadExceptionsProcessingInspection */
		catch (MissingValue $exception)
		{
			return FALSE;
		}
		
		return TRUE;
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
		return $this->GetSubkey($key, $default, $this->data);
	}
}

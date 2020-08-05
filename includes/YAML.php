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
	protected $data;
	
	/**
	 * Config constructor
	 *
	 * @param string $filename
	 *    The YAML file name to read
	 *
	 * @throws MissingExtension
	 *    When expected extensions are not available
	 *
	 * @throws InvalidFile
	 *    When the configuration file is missing or not readable
	 */
	public function __construct(string $filename)
	{
		if (!\extension_loaded('yaml'))
		{
			throw new MissingExtension('yaml');
		}
		
		if (!\is_readable($filename))
		{
			throw new InvalidFile($filename);
		}
		
		$this->data = \yaml_parse_file($filename);
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
	
	/**
	 * Check for subkey existence in arrays
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @param array $data
	 *    The current data array to read
	 *
	 * @return mixed
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	private function GetSubkey(string $key, $default, array $data)
	{
		$pos = \strpos($key, '/');
		
		// Check for subkey
		if ($pos !== FALSE)
		{
			$subkey = substr($key, $pos + 1);
			$key = substr($key, 0, $pos);
			
			if (isset($data[$key]) && \is_array($data[$key]))
			{
				return $this->GetSubkey($subkey, $default, $data[$key]);
			}
		}
		
		// Check for data
		if (isset($data[$key]))
		{
			return $data[$key];
		}
		
		// Check for default
		if ($default !== NULL)
		{
			return $default;
		}
		
		throw new MissingValue($key);
	}
}

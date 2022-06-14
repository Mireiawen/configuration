<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * Base class for configuration handlers
 *
 * @package Mireiawen\Configuration
 * @copyright 2020 Mira "Mireiawen" Manninen
 */
abstract class ConfigurationBase implements Configuration
{
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and validating the type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param string|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return string
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 *
	 * @throws \TypeError
	 *    If the key value is of wrong type
	 */
	public function GetString(string $key, ?string $default = NULL) : string
	{
		$value = $this->Get($key, $default);
		if (!\is_string($value))
		{
			throw new \TypeError(\sprintf(\_('Expected value of type %s, got %s'), 'string', \gettype($value)));
		}
		
		return $value;
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and validating the type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param int|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return int
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 *
	 * @throws \TypeError
	 *    If the key value is of wrong type
	 */
	public function GetInt(string $key, ?int $default = NULL) : int
	{
		$value = $this->Get($key, $default);
		if (!\is_int($value))
		{
			throw new \TypeError(\sprintf(\_('Expected value of type %s, got %s'), 'int', \gettype($value)));
		}
		
		return $value;
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and validating the type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param float|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return float
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 *
	 * @throws \TypeError
	 *    If the key value is of wrong type
	 */
	public function GetFloat(string $key, ?float $default = NULL) : float
	{
		$value = $this->Get($key, $default);
		if (!\is_float($value))
		{
			throw new \TypeError(\sprintf(\_('Expected value of type %s, got %s'), 'float', \gettype($value)));
		}
		
		return $value;
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and validating the type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param bool|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return bool
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 *
	 * @throws \TypeError
	 *    If the key value is of wrong type
	 */
	public function GetBool(string $key, ?bool $default = NULL) : bool
	{
		$value = $this->Get($key, $default);
		if (!\is_bool($value))
		{
			throw new \TypeError(\sprintf(\_('Expected value of type %s, got %s'), 'bool', \gettype($value)));
		}
		
		return $value;
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and casting the return value to correct type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param string|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return string
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	public function GetAsString(string $key, ?string $default = NULL) : string
	{
		return (string)$this->Get($key, $default);
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and casting the return value to correct type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param int|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return int
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	public function GetAsInt(string $key, ?int $default = NULL) : int
	{
		return (int)$this->Get($key, $default);
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and casting the return value to correct type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param float|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return float
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	public function GetAsFloat(string $key, ?float $default = NULL) : float
	{
		return (float)$this->Get($key, $default);
	}
	
	/**
	 * Get the configuration variable and return its value, or default if it
	 * is not set, and casting the return value to correct type
	 *
	 * @param string $key
	 *    The key to retrieve
	 *
	 * @param bool|null $default
	 *    The default value for the key, NULL to throw error if key is not set
	 *
	 * @return bool
	 *    The value of the key
	 *
	 * @throws MissingValue
	 *    If the key is not set and no default value is specified
	 */
	public function GetAsBool(string $key, ?bool $default = NULL) : bool
	{
		return (bool)$this->Get($key, $default);
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
	protected function GetSubkey(string $key, $default, array $data)
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
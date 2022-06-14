<?php
declare(strict_types = 1);

namespace Mireiawen\Configuration;

/**
 * Interface for configuration handling
 *
 * @package Mireiawen\Configuration
 * @copyright 2020 Mira "Mireiawen" Manninen
 */
interface Configuration
{
	/**
	 * Initialize the configuration class, optionally load configuration file as well
	 *
	 * @param string|null $filename
	 *    The configuration file to load
	 *
	 * @throws MissingExtension
	 *    In case of a required extension is missing
	 *
	 * @throws InvalidFile
	 *    In case of unable to read or process the configuration file
	 */
	public function __construct(?string $filename = NULL);
	
	/**
	 * Load a configuration file
	 *
	 * @param string $filename
	 *    The configuration file to load
	 *
	 * @throws InvalidFile
	 *    In case of unable to read or process the configuration file
	 */
	public function Load(string $filename) : void;
	
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
	public function Has(string $key) : bool;
	
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
	public function Get(string $key, $default = NULL);
	
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
	public function GetString(string $key, ?string $default = NULL) : string;
	
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
	public function GetInt(string $key, ?int $default = NULL) : int;
	
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
	public function GetFloat(string $key, ?float $default = NULL) : float;
	
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
	public function GetBool(string $key, ?bool $default = NULL) : bool;
	
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
	public function GetAsString(string $key, ?string $default = NULL) : string;
	
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
	public function GetAsInt(string $key, ?int $default = NULL) : int;
	
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
	public function GetAsFloat(string $key, ?float $default = NULL) : float;
	
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
	public function GetAsBool(string $key, ?bool $default = NULL) : bool;
}

# Configuration
JSON configuration file helper

* Class name: `Configuration`
* Namespace: `Mireiawen\Configuration`

## Requirements
* JSON extension
* PHP 7

## Methods

### __construct
    Configuration::__construct(string $filename)

Configuration class constructor

#### Arguments
* **string** `$filename`  - The JSON file name to read

#### Exceptions thrown
##### \Exception
* In case the extension is missing
* In case the configuration file is not readable
* In case of JSON errors

### Get
    mixed Configuration::Get(string $key, mixed $default)

Get the configuration variable and return its value, or default if it is not set

#### Arguments
* **string** `$key` - The key to retrieve
* **mixed** `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **mixed** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set


### GetString
    string Configuration::GetString(string $key, string|null $default)

Get the configuration variable and return its value, or default if it is not set, and validating the type

#### Arguments
* **string** `$key` - The key to retrieve
* **string|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **string** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

##### \TypeError
* In case the value is not of type string

### GetInt
    int Configuration::GetInt(string $key, int|null $default)

Get the configuration variable and return its value, or default if it is not set, and validating the type

#### Arguments
* **string** `$key` - The key to retrieve
* **int|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **int** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

##### \TypeError
* In case the value is not of type int

### GetFloat
    float Configuration::GetFloat(string $key, float|null $default)

Get the configuration variable and return its value, or default if it is not set, and validating the type

#### Arguments
* **string** `$key` - The key to retrieve
* **float|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **float** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

##### \TypeError
* In case the value is not of type float

### GetBool
    bool Configuration::GetBool(string $key, bool|null $default)

Get the configuration variable and return its value, or default if it is not set, and validating the type

#### Arguments
* **string** `$key` - The key to retrieve
* **bool|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **bool** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

##### \TypeError
* In case the value is not of type bool

### GetAsString
    string Configuration::GetAsString(string $key, string|null $default)

Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type

#### Arguments
* **string** `$key` - The key to retrieve
* **string|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **string** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

### GetAsInt
    int Configuration::GetAsInt(string $key, int|null $default)

Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type

#### Arguments
* **string** `$key` - The key to retrieve
* **int|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **int** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

### GetAsFloat
    float Configuration::GetAsFloat(string $key, float|null $default)

Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type

#### Arguments
* **string** `$key` - The key to retrieve
* **float|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **float** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set

### GetAsBool
    bool Configuration::GetAsBool(string key, bool|null default)

Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type

#### Arguments
* **string** `$key` - The key to retrieve
* **bool|null** - `$default` - The default value for the key, set to `NULL` to throw error if key is not set

#### Return value
* **bool** - the value of the key, or the provided default if key is not set

#### Exceptions thrown
##### \Exception
* In case the key is not available and default value is not set
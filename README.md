# Configuration
Configuration file helpers to read different file formats.

* Namespace: `Mireiawen\Configuration`

## Requirements
* PHP 7.3 or later
* Extensions depending on needed file types:
  * JSON
  * YAML

## Installation
You can clone or download the code from the [GitHub repository](https://github.com/Mireiawen/configuration) or you can use composer: `composer require mireiawen/configuration`

## Example
```php
$configuration = new Mireiawen\Configuration\JSON('config.json');
$hostname = $configuration->GetString('hostname');
$port = $configuration->GetInt('port');
```

## JSON specific methods
### __construct
JSON class constructor
```php
Configuration::__construct(string $filename)
```

#### Arguments
| Type       | Name        | Description                |
|------------|-------------|----------------------------|
| **string** | `$filename` | The JSON file name to read |

#### Exceptions thrown
| Type               | Description                                                   |
|--------------------|---------------------------------------------------------------|
| `MissingExtension` | When expected extensions are not available                    |
| `InvalidFile`      | When the configuration file is missing or not readable        |

## Common interface methods

* [Has](#Has)
* [Get](#Get)
* [GetString](#GetString)
* [GetInt](#GetInt)
* [GetFloat](#GetFloat)
* [GetBool](#GetBool)
* [GetAsString](#GetAsString)
* [GetAsInt](#GetAsInt)
* [GetAsFloat](#GetAsFloat)
* [GetAsBool](#GetAsBool)

---
### Has
Check if the configuration variable exists and is set.
```php
Configuration::Has(string $key) : bool
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to check    |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **bool**   | `TRUE` if the value exists and is set, `FALSE` if the value does not exist |

---
### Get
Get the configuration variable and return its value, or default if it is not set.
```php
Configuration::Get(string $key, mixed $default) : mixed
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **mixed**  | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **mixed**  | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |

---
### GetString
Get the configuration variable and return its value, or default if it is not set, and validating the type
```php
Configuration::GetString(string $key, string|null $default) : string
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **string\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **string** | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |
| `\TypeError`   | In case the value is not of type string                       |

---
### GetInt
Get the configuration variable and return its value, or default if it is not set, and validating the type
```php
Configuration::GetInt(string $key, int|null $default) : int
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **int\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **int**    | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |
| `\TypeError`   | In case the value is not of type int                          |

---
### GetFloat
Get the configuration variable and return its value, or default if it is not set, and validating the type
```php
Configuration::GetFloat(string $key, float|null $default) : float
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **float\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **float**  | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |
| `\TypeError`   | In case the value is not of type float                        |

---
### GetBool
Get the configuration variable and return its value, or default if it is not set, and validating the type
```php
Configuration::GetBool(string $key, bool|null $default) : bool
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **bool\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **bool**   | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |
| `\TypeError`   | In case the value is not of type bool                         |

---


### GetAsString
Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type
```php
Configuration::GetAsString(string $key, string|null $default) : string
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **string\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **string** | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |

---
### GetAsInt
Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type
```php
Configuration::GetAsInt(string $key, int|null $default) : int
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **int\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **int**    | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |

---
### GetAsFloat
Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type
```php
Configuration::GetAsFloat(string $key, float|null $default) : float
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **float\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **float**  | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |

---
### GetAsBool
Get the configuration variable and return its value, or default if it is not set, and casting the return value to correct type
```php
Configuration::GetAsBool(string key, bool|null default) : bool
```

#### Arguments
| Type       | Name       | Description         |
|------------|------------|:--------------------|
| **string** | `$key`     | The key to retrieve |
| **bool\|null** | `$default` | The default value for the key, set to `NULL` to throw error if key is not set |

#### Return value
| Type       | Description                                                     |
|------------|:----------------------------------------------------------------|
| **bool**   | The value of the key, or the provided default if key is not set |

#### Exceptions thrown
| Type           | Description                                                   |
|----------------|:--------------------------------------------------------------|
| `MissingValue` | In case the key is not available and default value is not set |


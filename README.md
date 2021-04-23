# Use PHP 8 attributes to register eloquent model observers in a Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thomascombe/laravel-observer-attributes.svg?style=flat-square)](https://packagist.org/packages/thomascombe/laravel-observer-attributes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/thomascombe/laravel-observer-attributes/run-tests?label=tests)](https://github.com/thomascombe/laravel-observer-attributes/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/thomascombe/laravel-observer-attributes/Check%20&%20fix%20styling?label=code%20style)](https://github.com/thomascombe/laravel-observer-attributes/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/thomascombe/laravel-observer-attributes.svg?style=flat-square)](https://packagist.org/packages/thomascombe/laravel-observer-attributes)

## Installation

You can install the package via composer:

```bash
composer require thomascombe/laravel-observer-attributes
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Thomascombe\ObserverAttributes\ObserverAttributesServiceProvider" --tag="laravel-observer-attributes-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

Add single observer to model:
```php
use App\Observers\UserObserver;

#[Observer(UserObserver::class)]
class User extends Authenticatable 
{

}
```

It's just like:
```php
User::observe(UserObserver::class);
```
in `EventServiceProvider`

--- 
Add multiples observers to model:
```php
use App\Observers\EntityObserver;
use App\Observers\UserObserver;

#[Observer(UserObserver::class, EntityObserver::class)]
class User extends Authenticatable 
{

}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [thomascombe](https://github.com/thomascombe)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

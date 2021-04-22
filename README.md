# Use PHP 8 attributes to register eloquent model observers in a Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thomascombe/laravel_observer_attributes.svg?style=flat-square)](https://packagist.org/packages/thomascombe/laravel_observer_attributes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/thomascombe/laravel_observer_attributes/run-tests?label=tests)](https://github.com/thomascombe/laravel_observer_attributes/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/thomascombe/laravel_observer_attributes/Check%20&%20fix%20styling?label=code%20style)](https://github.com/thomascombe/laravel_observer_attributes/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/thomascombe/laravel_observer_attributes.svg?style=flat-square)](https://packagist.org/packages/thomascombe/laravel_observer_attributes)


## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel_observer_attributes-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel_observer_attributes-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require thomascombe/laravel_observer_attributes
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Thomascombe\LaravelObserverAttributes\LaravelObserverAttributesServiceProvider" --tag="laravel_observer_attributes-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Thomascombe\LaravelObserverAttributes\LaravelObserverAttributesServiceProvider" --tag="laravel_observer_attributes-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel_observer_attributes = new Thomascombe\LaravelObserverAttributes();
echo $laravel_observer_attributes->echoPhrase('Hello, Spatie!');
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

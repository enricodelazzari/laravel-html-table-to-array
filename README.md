
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package laravel-html-table-to-array

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enricodelazzari/laravel-html-table-to-array.svg?style=flat-square)](https://packagist.org/packages/enricodelazzari/laravel-html-table-to-array)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/enricodelazzari/laravel-html-table-to-array/run-tests?label=tests)](https://github.com/enricodelazzari/laravel-html-table-to-array/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/enricodelazzari/laravel-html-table-to-array/Check%20&%20fix%20styling?label=code%20style)](https://github.com/enricodelazzari/laravel-html-table-to-array/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/enricodelazzari/laravel-html-table-to-array.svg?style=flat-square)](https://packagist.org/packages/enricodelazzari/laravel-html-table-to-array)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-html-table-to-array.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-html-table-to-array)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require enricodelazzari/laravel-html-table-to-array
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-html-table-to-array-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-html-table-to-array-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-html-table-to-array-views"
```

## Usage

```php
$htmlTableToArray = new EnricoDeLazzari\HtmlTableToArray();
echo $htmlTableToArray->echoPhrase('Hello, EnricoDeLazzari!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Enrico De Lazzari](https://github.com/enricodelazzari)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

# tinyurl-php-sdk

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nddcoder/tinyurl-php-sdk.svg?style=flat-square)](https://packagist.org/packages/nddcoder/tinyurl-php-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/dangdungcntt/tinyurl-php-sdk/run-tests?label=tests)](https://github.com/dangdungcntt/tinyurl-php-sdk/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/nddcoder/tinyurl-php-sdk.svg?style=flat-square)](https://packagist.org/packages/nddcoder/tinyurl-php-sdk)

The simple wrapper for TinyURL api.

## Installation

You can install the package via composer:

```bash
composer require nddcoder/tinyurl-php-sdk
```

## Usage

Short URL

```php
$shortedUrl = Nddcoder\TinyURL\TinyURL::create('https://nddcoder.com');
echo $shortedUrl; //https://tinyurl.com/ufvltuz
```

Preview Shorted URL

```php
$targetUrl = Nddcoder\TinyURL\TinyURL::preview('https://tinyurl.com/ufvltuz');
echo $targetUrl; //https://nddcoder.com
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

- [Dung Nguyen Dang](https://github.com/dangdungcntt)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

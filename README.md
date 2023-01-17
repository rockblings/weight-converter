# Weight conversion using php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jobadssit/weight-converter.svg?style=flat-square)](https://packagist.org/packages/jobadssit/weight-converter)
[![Tests](https://img.shields.io/github/actions/workflow/status/jobadssit/weight-converter/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jobadssit/weight-converter/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/jobadssit/weight-converter.svg?style=flat-square)](https://packagist.org/packages/jobadssit/weight-converter)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jobadssit/weight-converter
```

## Usage

```php
echo Jobadssist\WeightConverter\WeightConverter::kilograms(100)->toPounds(). PHP_EOL;
echo Jobadssist\WeightConverter\WeightConverter::kilograms(100)->toStones(). PHP_EOL;
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

- [Godspower Oduose](https://github.com/rockblings)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

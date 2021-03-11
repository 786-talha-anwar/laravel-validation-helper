# Very short description of the package

[![GitHub issues](https://img.shields.io/github/issues/dev-talha-anwar/laravel-validation-helper)](https://packagist.org/packages/talha-anwar/laravel-validation-helper)
[![GitHub forks](https://img.shields.io/github/forks/dev-talha-anwar/laravel-validation-helper)](https://travis-ci.org/talha-anwar/laravel-validation-helper)
[![GitHub stars](https://img.shields.io/github/stars/dev-talha-anwar/laravel-validation-helper)](https://scrutinizer-ci.com/g/talha-anwar/laravel-validation-helper)
[![GitHub license](https://img.shields.io/github/license/dev-talha-anwar/laravel-validation-helper)](https://packagist.org/packages/talha-anwar/laravel-validation-helper)

simple validation utility for laravel validation

## Installation

You can install the package via composer:

```bash
composer require dev-talha-anwar/laravel-validation-helper
```

## Publishing Config

after installation publish the configurtion

```bash
php artisan vendor:publish --provider=TalhaAnwar\LaravelValidationHelper\LaravelValidationHelperServiceProvider
```


## Usage

after installation simply use trait in your controller on top
``` php
use talhaanwar\LaravelValidationHelper\Traits\LVH;

```
after that use fascade

``` php
$validated = LVH::validate(['Admin.AdminEditForm'], [
            [
                'key' => 'name',
                'value' => ['max:191'],
                'messages' => [
                    'password.string' => 'Password shi likho.',
                    'password.min' => 'itna bra password....'
                ]
            ]
        ]);
        if (!is_array($validated)) :
            return $validated;
        endif;
```
or

``` php
$validated = LVH::validate(['Admin.AdminEditForm']);
        if (!is_array($validated)) :
            return $validated;
        endif;

```
or

``` php
$validated = LVH::validate([], [
            [
                'key' => 'name',
                'value' => ['max:191'],
                'messages' => [
                    'password.string' => 'Password shi likho.',
                    'password.min' => 'itna bra password....'
                ]
            ]
        ]);
        if (!is_array($validated)) :
            return $validated;
        endif;
```
for simple form validation requests

``` php
$validated = LVH::validate(['Admin.AdminEditForm'],[],true);
        if (!is_array($validated)) :
            return $validated;
        endif;
```



### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email 786anwartalha@gmail.com instead of using the issue tracker.

## Credits

- [Talha-Anwar](https://github.com/talha-anwar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
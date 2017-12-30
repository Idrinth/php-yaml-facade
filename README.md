# PHP YAML Facade
[![Build Status](https://travis-ci.org/Idrinth/php-yaml-facade.svg?branch=master)](https://travis-ci.org/Idrinth/php-yaml-facade)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/19fe5dde3b304ad5a90ae747b8969a2b)](https://www.codacy.com/app/Idrinth/php-yaml-facade?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Idrinth/php-yaml-facade&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/19fe5dde3b304ad5a90ae747b8969a2b)](https://www.codacy.com/app/Idrinth/php-yaml-facade?utm_source=github.com&utm_medium=referral&utm_content=Idrinth/php-yaml-facade&utm_campaign=Badge_Coverage)
[![Packagist](https://img.shields.io/packagist/dt/idrinth/yaml-facade.svg)](https://packagist.org/packages/idrinth/yaml-facade)
[![Packagist](https://img.shields.io/packagist/v/idrinth/yaml-facade.svg)](https://packagist.org/packages/idrinth/yaml-facade)
[![license](https://img.shields.io/github/license/idrinth/php-yaml-facade.svg)](https://github.com/Idrinth/php-yaml-facade/blob/master/LICENSE)

This library unifies the access to two different php-extensions and the symphony yaml component to make switching easier. It falls back to implementations in the following order:

- php yaml ( http://php.net/manual/en/book.yaml.php )
- php syck ( https://github.com/indeyets/syck )
- symphony/yaml ( https://packagist.org/packages/symfony/yaml )

## Limitations

Since the yaml-implementations deal with errors very differently, please don't try to parse something that is not intended to end up as an array.

## Low Coverage

Currently building the syck library fails on travis, so the related code can not be tested and tests are skipped.

## Installation

Installation via composer is the proposed way of using this library. It will always use [semantic versioning](http://semver.org).

```
"require": {
  "idrinth/yaml-facade": "^1.0"
}
```
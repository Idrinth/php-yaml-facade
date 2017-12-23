# PHP YAML Facade
[![Build Status](https://travis-ci.org/Idrinth/php-yaml-facade.svg?branch=master)](https://travis-ci.org/Idrinth/php-yaml-facade)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/19fe5dde3b304ad5a90ae747b8969a2b)](https://www.codacy.com/app/Idrinth/php-yaml-facade?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Idrinth/php-yaml-facade&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/19fe5dde3b304ad5a90ae747b8969a2b)](https://www.codacy.com/app/Idrinth/php-yaml-facade?utm_source=github.com&utm_medium=referral&utm_content=Idrinth/php-yaml-facade&utm_campaign=Badge_Coverage)

This library unifies the access to two different php-extensions and the symphony yaml component to make switching easier. It falls back to implementations in the following order:

- php yaml ( http://php.net/manual/en/book.yaml.php )
- php syck ( https://github.com/indeyets/syck )
- symphony/yaml ( https://packagist.org/packages/symfony/yaml )

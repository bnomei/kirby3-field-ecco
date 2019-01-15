# Kirby 3 Field Ecco

![GitHub release](https://img.shields.io/github/release/bnomei/kirby3-field-ecco.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-3%2B-black.svg)

Kirby 3 Field Method to ecco strings based on boolval of Field.

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to 
- [make a donation 🍻](https://www.paypal.me/bnomei/1) or
- [buy me ☕](https://buymeacoff.ee/bnomei) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/35731?link=1170)

## Installation

- for devkit-setup use `composer require bnomei/kirby3-field-ecco` or
- extract latest release of [kirby3-field-ecco.zip](https://github.com/bnomei/kirby3-field-ecco/releases/download/v1.0.2/kirby3-field-ecco.zip) as folder `site/plugins/kirby3-field-ecco`

> Installation as a gitsubmodule is *not* supported.


## Usage

in php code

```php
echo $page->myBoolField()->ecco('Yes please.', 'OMG NO!');
```

or in blueprint template language

```yml
{{ page.myBoolField.ecco('Yes please.', 'OMG NO!') }}
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-field-ecco/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

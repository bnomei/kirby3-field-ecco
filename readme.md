> [!TIP]
> This plugin has been merged with Janitor.

# Kirby Field Ecco

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-field-ecco?color=ae81ff)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-field-ecco?color=272822)
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)

Kirby Field Method to ecco strings based on boolval/isEmpty of a Field.

## Installation

- unzip [master.zip](https://github.com/bnomei/kirby3-field-ecco/archive/master.zip) as folder `site/plugins/kirby3-field-ecco` or
- `git submodule add https://github.com/bnomei/kirby3-field-ecco.git site/plugins/kirby3-field-ecco` or
- `composer require bnomei/kirby3-field-ecco`

## Usage

in php code

```php
echo $page->myBoolField()->ecco('Yes please. 👍', 'OMG NO! 👎');
echo $page->selectField()->ecco('has a value', 'is empty');
```

or in blueprint template language

```yml
{{ page.myBoolField.ecco('Yes please. 👍', 'OMG NO! 👎') }}
{{ page.selectField.ecco('has a value', 'is empty') }}
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-field-ecco/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

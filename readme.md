# Kirby 3 Field Ecco

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-field-ecco?color=ae81ff)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-field-ecco?color=272822)
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)

Kirby 3 Field Method to ecco strings based on boolval of Field.

## Commerical Usage

> <br>
> <b>Support open source!</b><br><br>
> This plugin is free but if you use it in a commercial project please consider to sponsor me or make a donation.<br>
> If my work helped you to make some cash it seems fair to me that I might get a little reward as well, right?<br><br>
> Be kind. Share a little. Thanks.<br><br>
> &dash; Bruno<br>
> &nbsp; 

| M | O | N | E | Y |
|---|----|---|---|---|
| [Github sponsor](https://github.com/sponsors/bnomei) | [Patreon](https://patreon.com/bnomei) | [Buy Me a Coffee](https://buymeacoff.ee/bnomei) | [Paypal dontation](https://www.paypal.me/bnomei/15) | [Hire me](mailto:b@bnomei.com?subject=Kirby) |

## Installation

- unzip [master.zip](https://github.com/bnomei/kirby3-field-ecco/archive/master.zip) as folder `site/plugins/kirby3-field-ecco` or
- `git submodule add https://github.com/bnomei/kirby3-field-ecco.git site/plugins/kirby3-field-ecco` or
- `composer require bnomei/kirby3-field-ecco`

## Usage

in php code

```php
echo $page->myBoolField()->ecco('Yes please. 👍', 'OMG NO! 👎');
```

or in blueprint template language

```yml
{{ page.myBoolField.ecco('Yes please. 👍', 'OMG NO! 👎') }}
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-field-ecco/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

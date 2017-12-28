# Laravel BBCode

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Description

Parse your BBCode easy with laravel-bbcode

## Install

Via Composer

``` bash
composer require pherum/laravel-bbcode
```

## Usage
To parse some text it's as easy as this!
``` php
$bbcode = new PheRum\BBCode\BBCodeParser;

echo $bbcode->parse('[b]Bold Text![/b]');
// <strong>Bold Text!</strong>
```
Would like the parser to not use all bbcodes? Just do like this.
``` php
$bbcode = new PheRum\BBCode\BBCodeParser;

echo $bbcode->only('bold', 'italic')
            ->parse('[b][u]Bold[/u] [i]Italic[/i]![/b]');
            // <strong>[u]Bold[/u] <em>Italic</em>!</strong>

echo $bbcode->except('bold')
            ->parse('[b]Bold[/b] [i]Italic[/i]');  // [b]Bold[/b] <em>Italic</em>
```

By default the parser is case sensitive. But if you would like the parser to accept tags like `` [B]Bold Text[/B] `` it's really easy.
``` php
$bbcode = new PheRum\BBCode\BBCodeParser;

// Case insensitive
echo $bbcode->parse('[b]Bold[/b] [I]Italic![/I]', true); // <strong>Bold</strong> <em>Italic!</em>

// Or like this

echo $bbcode->parseCaseInsensitive('[b]Bold[/b] [i]Italic[/i]');
     // <strong>Bold</strong> <em>Italic!</em>
```
You could also make it more explicit that the parser is case sensitive by using another helper function.
``` php
    $bbcode = new PheRum\BBCode\BBCodeParser;

    echo $bbcode->parseCaseSensitive('[b]Bold[/b] [I]Italic![/I]');
         // <strong>Bold</strong> [I]Italic![/I]
```

If you would like to completely remove all BBCode it's just one function call away.
``` php
    $bbcode = new PheRum\BBCode\BBCodeParser;

    echo $bbcode->stripBBCodeTags('[b]Bold[/b] [i]Italic![/i]');  // Bold Italic!
```

## Laravel integration
The integration into Laravel is really easy, and the method is the same for both Laravel 5.
Just open your ``app.php`` config file.

In there you just add this to your providers array
``` php
PheRum\BBCode\BBCodeServiceProvider::class,
```

And this to your facades array
``` php
'BBCode' => PheRum\BBCode\Facades\BBCode::class,
```

The syntax is the same as if you would use it in vanilla PHP but with the ``BBCode::`` before the methods.
Here are some examples.
``` php
// Simple parsing
echo BBCode::parse('[b]Bold Text![/b]');

// Limiting the parsers with the only method
echo BBCode::only('bold', 'italic')
        ->parse('[b][u]Bold[/u] [i]Italic[/i]![/b]'); // <strong>[u]Bold[/u] <em>Italic</em>!</strong>

// Or the except method
echo BBCode::except('bold')
        ->parse('[b]Bold[/b] [i]Italic[/i]'); // [b]Bold[/b] <em>Italic</em>
```

## Testing

``` bash
phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [PheRum](https://github.com/pherum)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pherum/laravel-bbcode.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pherum/laravel-bbcode/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/65690597/shield
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pherum/laravel-bbcode.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pherum/laravel-bbcode.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/PheRum/laravel-bbcode
[link-travis]: https://travis-ci.org/PheRum/laravel-bbcode
[link-styleci]: https://styleci.io/repos/115532859
[link-code-quality]: https://scrutinizer-ci.com/g/PheRum/laravel-bbcode
[link-downloads]: https://packagist.org/packages/PheRum/laravel-bbcode
[link-author]: https://github.com/PheRum
[link-contributors]: ../../contributors
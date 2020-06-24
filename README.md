# Blade Feather icons 

**Package is still under development - Aiming for a release on Sunday 2020/06/28**

A package to easily make use of [Feather Icons]() in your Laravel Blade views. 

For a full list of available icons see the [SVG directory].

## Requirements 

- PHP 7.4 or higher
- Laravel 7.14 or higher 

## Install 

Via composer 

```
$ composer require actb/blade-feather-icons
```

## Useage

Icons can be used a self-closing blade components which will be compiled to SVG icons. 

```
<x-fi-eye/>
```

You can also pass classes to your icon components: 

```
<x-fi-eye class="w-6 h-6 text-gray-500"/>
```

And even use inline styles: 

```
<x-fi-eye style="color: #555"/>
```

## raw SVG icons 

If you want to use the raw SVG icons as assets, you can publish them using: 

```
php artisan vendor:publish --tag=blade-feather-icons --force
```

The use them in your views like: 

```
<img src="{{ asset('vendor/blade-feather-icons/solid/eye.svg') }}" width="10" height="10"/>
```

### Blade icons 

Blade Feather icons uses Blade icons under the hood. Please refer to [the Blade icons readme]() 
for additional functionality.

## Changelog 

Please see [CHANGELOG]() for more information on what has changed recently. 

## Testing 

```
$ composer test
```

## Contributing 

Please see [CONTRIBUTING]() for details.

## Security

If you discover any security related issues, please email [topairy@gmail.com]() instead of using the issue tracker.

## Credits

- [Tjoosten]() 
- [All contributors]()

## License 

The MIT license (MIT). Please see [License file]() for more information. 


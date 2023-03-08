# Brainlight for Laravel

Brainlight is a lightweight templating system with minimal logic pattern.

This is Laravel support for the [Brainlight Php](https://github.com/GiromettaMarco/brainlight-php) template engine.

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [License](#license)

## Requirements

- PHP >= 8.1
- Laravel ^8.0|^9.0|^10.0

## Installation

Require Brainlight for Laravel package in your Laravel project using the following command:

```
composer require brainlight/brainlight-for-laravel
```

By default, Brainlight for Laravel stores its cache in ```storage_path('brain')```. If you don't plan to change this path, create a new ```brain``` directory in your ```storage``` folder.

Probably, you also want to create a ```.gitignore``` file in this new directory:

```
*
!.gitignore
```

## Configuration

Publish the configuration file with the command:

```
php artisan vendor:publish --provider="BrainlightPhp\BrainlightForLaravel\BrainlightServiceProvider"
```

Then edit the configuration file that you've just created under: ```config/brainlight.php```

Make reference to the [Brainlight PHP documentation](https://github.com/GiromettaMarco/brainlight-php) for options customization.

## Usage

You can render Brainlight template files the same way as a Blade one:

```php
return view('template', ['content' => 'Hello world.']);
```

template.brain:

```
<p>{{content}}</p>
```

Make reference to the [Brainlight documentation](https://github.com/GiromettaMarco/brainlight) for templates syntax.

## License

Brainlight for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

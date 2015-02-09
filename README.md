# Laravel Five Package Bridges

[![Build Status](https://travis-ci.org/morrislaptop/LaravelFivePackageBridges.svg?branch=master)](https://travis-ci.org/morrislaptop/LaravelFivePackageBridges)

This Laravel package provides a bridging trait and multiple bridges that allows Laravel 4 packages to be used in Laravel 5.

Current packages that are bridged are:

* [laracasts/flash](https://github.com/laracasts/flash)
* [way/generators](https://github.com/JeffreyWay/Laravel-4-Generators)
* [intervention/image](https://github.com/Intervention/image)
* [maatwebsite/excel](https://github.com/Maatwebsite/Laravel-Excel)
* [itsgoingd/clockwork](https://github.com/itsgoingd/clockwork)
* [cartalyst/sentry](https://github.com/cartalyst/sentry)
* [robbiep/cloudconvert-laravel](https://github.com/robbiepaul/cloudconvert-laravel)
* [camroncade/timezone](https://github.com/camroncade/timezone)
* [laracasts/utilities](https://github.com/laracasts/PHP-Vars-To-Js-Transformer)

If you want to build a bridge, please follow the [contributing guide](CONTRIBUTING.md).

# Installation

Begin by installing this package through Composer.

	composer require morrislaptop/laravel-five-package-bridges

Once this operation completes, add the config service provider, this brings the package() method back
to the config repository. Open app/config/app.php and add..

	'Morrislaptop\LaravelFivePackageBridges\ConfigServiceProvider',

Then we need to swap the core Application class with the bridging, this adds various methods like after()
back. Open bootstrap/app.php and replace..

```php
$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);
```

with

```php
$app = new Morrislaptop\LaravelFivePackageBridges\Application(
    realpath(__DIR__.'/../')
);
```

The final step is to add the bridged service providers instead of the raw service providers.

Open app/config/app.php, and add lines as appropriate.

	'Morrislaptop\LaravelFivePackageBridges\Bridges\FlashServiceProvider', 
	'Morrislaptop\LaravelFivePackageBridges\Bridges\GeneratorsServiceProvider',
	'Morrislaptop\LaravelFivePackageBridges\Bridges\ImageServiceProvider',
	'Morrislaptop\LaravelFivePackageBridges\Bridges\ExcelServiceProvider',
	'Morrislaptop\LaravelFivePackageBridges\Bridges\ClockworkServiceProvider',
	'Morrislaptop\LaravelFivePackageBridges\Bridges\SentryServiceProvider',

Voila! Those packages now work as they always did in Laravel 4.

# Custom Packages

If you have a private package you can simply create your own bridging service provider and bring in the trait from this package.

```php
<?php namespace App\Bridges;  

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait; 
use Acme\Private\NuclearServiceProvider as BaseNuclearServiceProvider;

  class NuclearServiceProvider extends BaseNuclearServiceProvider  {  
	use LaravelFivePackageBridgeTrait;  
}

```

# Contributing

Please see the [contributing guide](CONTRIBUTING.md). 



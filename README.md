# Laravel Five Package Bridges

This Laravel package provides a bridging trait and multiple bridges that allows Laravel 4 packages to be used in Laravel 5.

Current packages that are bridged are:

* [laracasts/flash](https://github.com/laracasts/flash)
1. [way/generators](https://github.com/JeffreyWay/Laravel-4-Generators)

If you have a package you want added to the bridges, please submit a pull request.

# Installation

Begin by installing this package through Composer.

	composer require morrislaptop/laravel-five-package-bridges

Once this operation completes, the final step is to add the bridged service providers instead of the raw service providers. 

Open app/config/app.php, and add lines as appropriate.

	'Morrislaptop\LaravelFivePackageBridges\Bridges\FlashServiceProvider', 	'Morrislaptop\LaravelFivePackageBridges\Bridges\GeneratorsServiceProvider'

Voila! Those packages now work as they always did in Laravel 4.

# Custom Packages

If you have a private package you can simply create your own bridging service provider and bring in the trait from this package.

```php
<?php namespace App\Bridges;  use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait; use Acme\Private\NuclearServiceProvider as BaseNuclearServiceProvider;  class NuclearServiceProvider extends BaseNuclearServiceProvider {  	var $namespace = 'nuclear'; 	var $vendor = 'acme';  	use LaravelFivePackageBridgeTrait;  }
```
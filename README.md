# Prestashop Laravel Package!
A Simple and Elegant Wrapper for the Prestashop PHP Library.

### Introduction
This project started after the need to migrate a Clients Prestashop install over to WooCommerce.


### Installation Laravel 5.5 +
Just use composer to drop this package in and let Auto Discover do its wonderful thing!

```bash
composer require ollywarren/prestashop
```

Publish the vendor configuration:

``` php artisan vendor:publish``` (Select the relevant package from the list)

Set the environment variables in your Apps .env file:

```
PRESTASHOP_URL="<YOUR PRESTASHOP INSTALL URL>"
PRESTASHOP_KEY="<YOUR KEY>"
```

Review the other avilable options in the documentation linked below and in the included larawoo configuration file.

## Installation Laravel 5.4

Use composer to add it to your project dependencies:

``` composer require ollywarren/prestashop ```


Then inside your ```config/app.php```


Add the package service provider to the providers array:

``` Ollywarren\Prestashop\PrestashopServiceProvider::class, ```

Add the facade to the alias array:

```php
[
    'Larawoo' => 'Ollywarren\Prestashop\Facades\Prestashop::class'
]
 ```

Finally for good measure dump the composer autoloader to make sure we've pulled in the helper method:

``` composer dump-autoloader ```

Publish the vendor configuration:

``` php artisan vendor:publish```

Set the environment variables in your Apps .env file:

```
PRESTASHOP_URL="<YOUR PRESTASHOP INSTALL URL>"
PRESTASHOP_KEY="<YOUR KEY>"
```

### Usage Instructions

The included helper method makes accessing the underlying methods as easy as.




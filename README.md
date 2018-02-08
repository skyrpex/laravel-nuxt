# Laravel Nuxt

This package allows you to build a SPA with Laravel and Nuxt.

## Installation

```bash
composer require pallares/laravel-nuxt
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in `config/app.php` file:

```php
return [
  // ...
  'providers' => [
      // ...
      Pallares\LaravelNuxt\LaravelNuxtServiceProvider::class,
  ],
];
```

You need to add a fallback route that will render the SPA page in `routes/web.php` file:

```php
// ...
// Add this route the last, so it doesn't interfere with your other routes.
Route::get(
    '{uri}',
    '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');
```

Finally, you must install the [laravel-nuxt](https://github.com/skyrpex/laravel-nuxt-js) npm package. After following the instructions, run `npm run build` and try your SPA!

# Notify (Laravel)

Notify alert boxes to the browser from Laravel.
Uses [bootstrap-notify](http://bootstrap-notify.remabledesigns.com) library.

## Installation

First, pull in the package through Composer.

```js
"require": {
    "rangerx/laravel-notify": "1.*"
}
```

### Laravel <5.4 only (Laravel 5.5 has automatic package discovery)
Include the service provider within `config\app.php`.

```php
'providers' => [
    RangerX\Notify\NotifyServiceProvider::class,
];
```

Add a facade alias or use the globel helper function `notify_info()`.

```php
'aliases' => [
    'Notify' => RangerX\Notify\Facades\Notify::class,
];
```

## Note

Please keep in mind this is for my personal workflow and might not fit your need.
I developed this to help speed up my day to day workflow. 

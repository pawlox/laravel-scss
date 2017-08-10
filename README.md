# laravel-scss

Adds a @scss tag to Laravel's Blade templating engine.

With this package you can use SCSS syntax in Laravel's Blade templates. It will be automatically compiled to CSS in result.
Example:
```blade
<style>
    @scss
        #menu {
            .item {
                &.active {
                    background-color: red;
                }
            }
        }
    @endscss
</style>
```

## Installation
### Get the Package
Install the pawlox/laravel-scss package:
```
composer require pawlox/laravel-scss
```


### Register the Service Provider
Open up your `app.php` in your `config` folder, and add the following line to
your `providers` list like:

```
'providers' => [
    ...
    Pawlox\LaravelScss\LaravelScssProvider::class
]
```

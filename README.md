# portfolio
my Portfolio (https://fternis.de)

## Features:
- Theme Toggle
- Locale change (Dynamic)


-   -   -
in App\Http\Kernel.php
add `\App\Http\Middleware\SetLocale::class,` under 
```php
    protected $middlewareGroups = [
        'web' => [
```

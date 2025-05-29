# portfolio
my Portfolio (https://fternis.de)


in App\Http\Kernel.php
add `\App\Http\Middleware\SetLocale::class,` under 
```php
    protected $middlewareGroups = [
        'web' => [
```

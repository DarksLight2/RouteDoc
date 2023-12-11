## Установка
- composer require darkslight2/route-doc
## Системные требования
- laravel 9+
- php 8.2+
## Использование
```php
<?php

use DarksLight2\RouteDoc\Attributes\RouteDoc;

class Controller extends Controller
{
    #[RouteDoc("description", "method", ["except_params" => "rule"], ["success_response_template"], ["error_response_template"])]
    public function some()
    {
        ...
    }
}
```
## Страница отображения
http://example.com/routes/doc
## Возможность изменения визуальной части
Для этого необходимо опубликовать шаблоны, после этого их можно кастомизировать как угодно
- php artisan vendor:publish --provider='DarksLight2\RouteDoc\Providers\RouteDocServiceProvider'

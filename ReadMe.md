## Установка
- composer require darkslight2/route-doc
## Системные требования
- laravel 9+
- php 8.2+
## Использование
Перед методом контроллера необходимо установить атрибут `#[RouteDoc("description")]`
```php
<?php

use DarksLight2\RouteDoc\Attributes\RouteDoc;

class Controller extends Controller
{
    #[RouteDoc("description")]
    public function some()
    {
        ...
    }
}
```
## Страница отображения
http://example.com/routes/doc

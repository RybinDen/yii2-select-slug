Виджет для Yii 2, который выводит варианты алиаса на русском и английском языке используя заголовок
------
установка
------------
Выполнить команду 
```
php composer.phar require "rybinden/yii2-select-slug" "*"
```
или добавить В секцию `require` файла  `composer.json` вручную строчку:
```json
"rybinden/yii2-select-slug" : "*"
```
И обновить командой composer update

использование
---------------
```php
use rybinden\selectslug\InputText;
...
echo InputText::widget([
'model' => $model,
'titleAttribute' => 'title',
'slugAttribute' => 'slug',
]);
...
```
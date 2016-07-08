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
Настройка
---------------
В конфигурационном файле подключить
```php
'components' => [
'translate' => [
'class' => 'rybinden\translate\YandexTranslate',
'key' => 'ваш_ключ_приложения', // http://api.yandex.com/key/keyslist.xml
],
...
],
```
В вашем контроллере, который вызывает форму добавить действие:
```php
public function actions(){
return [
'slug' => 'rybinden\selectslug\SlugAction',
];
}
```

использование
---------------
```php
use rybinden\selectslug\InputText;
...ваша форма
echo InputText::widget([
'model' => $model,
'titleAttribute' => 'title',
'slugAttribute' => 'slug',
]);
...другие поля формы
```
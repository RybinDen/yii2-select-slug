<?php
namespace rybinden\selectslug;
use Yii;
use yii\helpers\Inflector;

class SlugAction extends \yii\base\Action{
public function run(){
$text = Yii::$app->request->post('text');
$translateText = Yii::$app->translate->translate($text, 'en');
$result[] = Inflector::slug($text);
$result[] = Inflector::slug($translateText);
 return json_encode($result);
}

}
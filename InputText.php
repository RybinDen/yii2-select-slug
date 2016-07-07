<?php
namespace rybinden\selectslug;

use yii\helpers\Html;
use yii\base\Widget;

class InputText extends Widget{
public $model;
public $titleAttribute;
public $slugAttribute;

    public function run(){
echo Html::activeTextInput($this->model, $this->titleAttribute, ['id'=>'title-input', 'maxlength' => 64]);
echo '<div id="slug-block">';
echo Html::activeTextInput($this->model, $this->slugAttribute, ['id'=>'slug-input', 'value'=>'', 'maxlength' => 64]);
echo '
<div id="results"></div>
</div><!--/slug-block-->
';
$this->registerAssets();
    }
protected function registerAssets(){
        WidgetAsset::register($this->getView());
    }
}
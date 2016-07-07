<?php
namespace rybinden\selectslug;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class InputText extends InputWidget{

    public function init(){
        parent::init();
        $this->initOptions();
    }

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
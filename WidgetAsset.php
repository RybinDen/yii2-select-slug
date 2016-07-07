<?php
namespace rybinden\selectslug;

use yii\web\AssetBundle;

class WidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/rybinden/yii2-select-slug/assets';
public $js = [
'js/rybinden-select-slug.js',
];

    public $depends = [
'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

}
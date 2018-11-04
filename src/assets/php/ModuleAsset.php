<?php

namespace myzero1\z1site\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class ModuleAsset extends AssetBundle
{
    public $jsVer = '1.735.1';
    public $cssVer = '1.735.1';
    function init(){
        parent::init();

        \myzero1\layui\assets\php\components\Asset::addAssetsVer($this->js, $this->jsVer, $this->css, $this->cssVer, __CLASS__);
    }

    public $sourcePath = '@vendor/myzero1/yii2-z1site/src/assets/static';
    // public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
    ];
    public $js = [
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

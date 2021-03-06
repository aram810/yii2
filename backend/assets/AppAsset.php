<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = '@bower/';
    public $css = [
        'css/site.css',
//        'admin-lte/css/AdminLTE.css'
    ];
    public $js = [
        'admin-lte/js/AdminLTE/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

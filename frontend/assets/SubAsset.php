<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.09.2017
 * Time: 10:51
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class SubAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'lib/css/nivo-slider.css',
        'css/core.css',
        'css/shortcode/shortcodes.css',
        'css/style.css',
        'css/responsive.css',
        'css/color/color-core.css',
        'css/custom.css',
    ];
    public $js = [
        'js/vendor/jquery-3.1.1.min.js',
        'js/bootstrap.min.js',
        'lib/js/jquery.nivo.slider.js',
        'js/plugins.js',
        'js/main.js',
        'js/submas.js',
    ];
    public $depends = [

    ];

}
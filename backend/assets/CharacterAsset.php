<?php

/**
 * @author Copyright (c) 2015 rootkit
 */

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class CharacterAsset extends AssetBundle
{
    public $basePath = '/';
    public $baseUrl  = '@backendUrl';

    public $css = [

        // Font CSS (Via CDN)
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic',

        // Snap SVG
        'vendor/plugins/svg/component.css',

        // Theme CSS
        'css/skin/theme.css',
        'css/animate.css'
    ];

    public $js = [

        // Theme Javascript
        'js/utility.js',
        'js/main.js'
    ];

    public $jsOptions = [ 'position' => View::POS_END ];

    public $depends = [
        'common\assets\FontAwesome',
        'backend\assets\BootstrapJsAsset'
    ];
}
<?php

namespace common\assets;

use yii\web\View;

class BootstrapAsset extends \yii\bootstrap\BootstrapAsset
{
    public $sourcePath = '@bower/bootstrap/dist';

    public $jsOptions = [ 'position' => View::POS_HEAD ];

    public $depends = [ 'yii\web\JqueryAsset' ];
}
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SignupAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'signup/vendor/bootstrap/css/bootstrap.min.css',
        'signup/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'signup/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'signup/vendor/animate/animate.css',
        'signup/vendor/css-hamburgers/hamburgers.min.css',
        'signup/vendor/animsition/css/animsition.min.css',
        'signup/vendor/select2/select2.min.css',
        'signup/vendor/daterangepicker/daterangepicker.css',
        'signup/css/util.css',
        'signup/css/main.css'
    ];
    public $js = [
        'signup/vendor/jquery/jquery-3.2.1.min.js',
        'signup/vendor/animsition/js/animsition.min.js',
        'signup/vendor/bootstrap/js/popper.js',
        'signup/vendor/bootstrap/js/bootstrap.min.js',
        'signup/vendor/select2/select2.min.js',
        'signup/vendor/daterangepicker/moment.min.js',
        'signup/vendor/daterangepicker/daterangepicker.js',
        'signup/vendor/countdowntime/countdowntime.js',
        'signup/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

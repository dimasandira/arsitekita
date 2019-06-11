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
class SigninAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'signin/vendor/bootstrap/css/bootstrap.min.css',
        'signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'signin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'signin/vendor/animate/animate.css',
        'signin/vendor/css-hamburgers/hamburgers.min.css',
        'signin/vendor/animsition/css/animsition.min.css',
        'signin/vendor/select2/select2.min.css',
        'signin/vendor/daterangepicker/daterangepicker.css',
        'signin/css/util.css',
        'signin/css/main.css'
    ];
    public $js = [
        'signin/vendor/jquery/jquery-3.2.1.min.js',
        'signin/vendor/animsition/js/animsition.min.js',
        'signin/vendor/bootstrap/js/popper.js',
        'signin/vendor/bootstrap/js/bootstrap.min.js',
        'signin/vendor/select2/select2.min.js',
        'signin/vendor/daterangepicker/moment.min.js',
        'signin/vendor/daterangepicker/daterangepicker.js',
        'signin/vendor/countdowntime/countdowntime.js',
        'signin/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

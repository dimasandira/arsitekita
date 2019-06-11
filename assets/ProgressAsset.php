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
class ProgressAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'styles/bootstrap4/bootstrap.min.css',
        'css/site.css',
        'plugins/OwlCarousel2-2.2.1/owl.carousel.css',
        'plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
        'plugins/OwlCarousel2-2.2.1/animate.css',
        'styles/responsive.css',
        'css/magnific-popup.css',
        'css/jquery-ui.css',
        'css/bootstrap-datepicker.css',
        'css/mediaelementplayer.css',
        'fonts/flaticon/font/flaticon.css',
        'css/fl-bigmug-line.css',
        'fonts/icomoon/style.css',
        'css/aos.css',
        'css/style.css',
        'plugins/colorbox/colorbox.css',
        'styles/course.css',
        'styles/course_responsive.css',
        'styles/blog_single.css',
        'styles/blog_single_responsive.css',
        'styles/main_styles.css'
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'styles/bootstrap4/popper.js',
        'styles/bootstrap4/bootstrap.min.js',
        'plugins/greensock/TweenMax.min.js',
        'plugins/greensock/TimelineMax.min.js',
        'plugins/scrollmagic/ScrollMagic.min.js',
        'plugins/greensock/animation.gsap.min.js',
        'plugins/greensock/ScrollToPlugin.min.js',
        'plugins/OwlCarousel2-2.2.1/owl.carousel.js',
        'plugins/easing/easing.js',
        'plugins/parallax-js-master/parallax.min.js',
        'js/custom.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/jquery-ui.js',
        'js/popper.min.js',
        'js/owl.carousel.min.js',
        'js/mediaelement-and-player.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/aos.js',
        'js/course.js',
        'progress-tracker/scripts/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

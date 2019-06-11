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
class ManageAsset extends AssetBundle
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
        'cooladmin/css/font-face.css',
        'cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css',
        'cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css',
        'cooladmin/vendor/animsition/animsition.min.css',
        'cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
        'cooladmin/vendor/slick/slick.css',
        'cooladmin/vendor/select2/select2.min.css',
        'cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css',
        'cooladmin/css/theme.css',
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
        'cooladmin/vendor/slick/slick.min.js',
        'cooladmin/vendor/wow/wow.min.js',
        'cooladmin/vendor/animsition/animsition.min.js',
        'cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'cooladmin/vendor/counter-up/jquery.waypoints.min.js',
        'cooladmin/vendor/counter-up/jquery.counterup.min.js',
        'cooladmin/vendor/circle-progress/circle-progress.min.js',
        'cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js',
        'cooladmin/vendor/chartjs/Chart.bundle.min.js',
        'cooladmin/vendor/select2/select2.min.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

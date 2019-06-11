<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <style>
			@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
			@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
			.row-section{float:left; width:100%;  /* fallback for old browsers */
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			}
			.row-section h2{float:left; width:100%; color:#fff; margin-bottom:30px; font-size: 14px;}
			.row-section h2 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px;font-weight:700;}
			.row-section h2 a{color:#d2abce;}
			.row-section .row-block{background:#fff; padding:20px; margin-bottom:50px;}
			.row-section .row-block ul{margin:0; padding:0;}
			.row-section .row-block ul li{list-style:none; margin-bottom:20px;}
			.row-section .row-block ul li:last-child{margin-bottom:0;}
			.row-section .row-block ul li:hover{cursor:grabbing;}
			.row-section .row-block .media{border:1px solid #d5dbdd; padding:5px 20px; border-radius: 5px; box-shadow:0px 2px 1px rgba(0,0,0,0.04); background:#fff;}
			.row-section .media .media-left img{width:75px;}
			.row-section .media .media-body p{padding: 0 15px; font-size:14px;}
			.row-section .media .media-body h4 {color: #6b456a; font-size: 18px; font-weight: 600; margin-bottom: 0; padding-left: 14px; margin-top:12px;}
			.btn-default{background:#6B456A; color:#fff; border-radius:30px; border:none; font-size:16px;}
        </style>
    </head>
    <body>
        <?php $this->beginBody() ?>
            <?php
            // NavBar::begin([
            //     'brandLabel' => Yii::$app->name,
            //     'brandUrl' => Yii::$app->homeUrl,
            //     'options' => [
            //         'class' => 'navbar-inverse navbar-fixed-top',
            //     ],
            // ]);
            // echo Nav::widget([
            //     'options' => ['class' => 'navbar-nav navbar-right'],
            //     'items' => [
            //         ['label' => 'Home', 'url' => ['/site/index']],
            //         ['label' => 'About', 'url' => ['/site/about']],
            //         ['label' => 'Contact', 'url' => ['/site/contact']],
            //         Yii::$app->user->isGuest ? (
            //             ['label' => 'Login', 'url' => ['/site/login']]
            //         ) : (
            //             '<li>'
            //             . Html::beginForm(['/site/logout'], 'post')
            //             . Html::submitButton(
            //                 'Logout (' . Yii::$app->user->identity->username . ')',
            //                 ['class' => 'btn btn-link logout']
            //             )
            //             . Html::endForm()
            //             . '</li>'
            //         )
            //     ],
            // ]);
            // NavBar::end();
            ?>

                <?php /* Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) */ ?>
                <?= Alert::widget() ?>
                <?= $this->render('header') ?>
                </div>
                <?= $content ?>
                <div class="super_container">
                <?= $this->render('footer') ?>
        <script>
            $( function() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
            } );
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

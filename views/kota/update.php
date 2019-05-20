<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kota */

$this->title = 'Update Kota: ' . $model->KOTA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kota', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KOTA_ID, 'url' => ['view', 'id' => $model->KOTA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

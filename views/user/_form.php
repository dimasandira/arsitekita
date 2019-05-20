<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kota;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */

$dropdownList = ArrayHelper::map(Kota::find()->all(), 'KOTA_ID', 'NAMA_KOTA');
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KOTA_ID')->dropDownList($dropdownList, ['KOTA_ID' => 'NAMA_KOTA']) ?>

    <?= $form->field($model, 'NAMA_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_KTP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_HP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkmDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-ikm-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ikm')->textInput() ?>

    <?= $form->field($model, 'kode_survei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_survei_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_survei_detail')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-ikm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_surveyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_surveyer')->textInput() ?>

    <?= $form->field($model, 'alamat_surveyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pedidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

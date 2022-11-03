<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Galeri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'galeri_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galeri_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galeri_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'galeri_date')->textInput() ?>

    <?= $form->field($model, 'galeri_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

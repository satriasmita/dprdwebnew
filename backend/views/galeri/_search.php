<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GaleriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'galeri_id') ?>

    <?= $form->field($model, 'galeri_title') ?>

    <?= $form->field($model, 'galeri_image') ?>

    <?= $form->field($model, 'galeri_desc') ?>

    <?= $form->field($model, 'galeri_date') ?>

    <?php // echo $form->field($model, 'galeri_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BadanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="badan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'badan_id') ?>

    <?= $form->field($model, 'badan_nama') ?>

    <?= $form->field($model, 'badan_jabatan') ?>

    <?= $form->field($model, 'badan_kategori_id') ?>

    <?= $form->field($model, 'badan_image') ?>

    <?php // echo $form->field($model, 'badan_ttl') ?>

    <?php // echo $form->field($model, 'badan_agama') ?>

    <?php // echo $form->field($model, 'badan_suamiistri') ?>

    <?php // echo $form->field($model, 'badan_anak') ?>

    <?php // echo $form->field($model, 'badan_alamat') ?>

    <?php // echo $form->field($model, 'badan_pengalaman_organisasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

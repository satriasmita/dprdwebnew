<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FraksiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fraksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fraksi_id') ?>

    <?= $form->field($model, 'fraksi_nama') ?>

    <?= $form->field($model, 'fraksi_jabatan') ?>

    <?= $form->field($model, 'fraksi_kategori_id') ?>

    <?= $form->field($model, 'fraksi_image') ?>

    <?php // echo $form->field($model, 'fraksi_ttl') ?>

    <?php // echo $form->field($model, 'fraksi_agama') ?>

    <?php // echo $form->field($model, 'fraksi_suamiistri') ?>

    <?php // echo $form->field($model, 'fraksi_anak') ?>

    <?php // echo $form->field($model, 'fraksi_alamat') ?>

    <?php // echo $form->field($model, 'fraksi_pengalaman_organisasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

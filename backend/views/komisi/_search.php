<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KomisiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komisi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'komisi_id') ?>

    <?= $form->field($model, 'komisi_nama') ?>

    <?= $form->field($model, 'komisi_jabatan') ?>

    <?= $form->field($model, 'komisi_kategori_id') ?>

    <?= $form->field($model, 'komisi_image') ?>

    <?php // echo $form->field($model, 'komisi_ttl') ?>

    <?php // echo $form->field($model, 'komisi_agama') ?>

    <?php // echo $form->field($model, 'komisi_suamiistri') ?>

    <?php // echo $form->field($model, 'komisi_anak') ?>

    <?php // echo $form->field($model, 'komisi_alamat') ?>

    <?php // echo $form->field($model, 'komisi_pengalaman_organisasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

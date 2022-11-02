<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AtributPuskesmasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atribut-puskesmas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'id_atribut') ?>

    <?php // echo $form->field($model, 'nama_atribut') ?>

    <?php // echo $form->field($model, 'dekripsi_atribut') ?>

    <?php // echo $form->field($model, 'gambar_atribut') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

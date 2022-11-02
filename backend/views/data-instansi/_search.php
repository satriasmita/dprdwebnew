<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-instansi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'nama_upt') ?>

    <?php // echo $form->field($model, 'alamat_upt') ?>

    <?php // echo $form->field($model, 'telp') ?>

    <?php // echo $form->field($model, 'no_wa') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

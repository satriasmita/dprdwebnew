<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiKategoriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-kategori-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'kode_survei') ?>

    <?php // echo $form->field($model, 'nama_survei') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unggah-file-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'id_unggah') ?>

    <?= $form->field($model, 'jenis_unggah') ?>

    <?= $form->field($model, 'nama_unggah') ?>

    <?php // echo $form->field($model, 'keterangan_unggah') ?>

    <?php // echo $form->field($model, 'lokasi_unggah') ?>

    <?php // echo $form->field($model, 'tanggal_unggah') ?>

    <?php // echo $form->field($model, 'unggah_oleh') ?>

    <?php // echo $form->field($model, 'status_unggah') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
        <?= Html::a('<i class="fa fa-times" aria-hidden="true"></i> Batal', ['index'],['class' => 'btn mb-3 btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

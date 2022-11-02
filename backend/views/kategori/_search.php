<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        // 'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'kategori_id') ?>

    <?php // echo $form->field($model, 'kategori_nama') ?>

    <?php // echo $form->field($model, 'kategori_status') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>

        <!-- <button type="button" class="btn mb-3 btn-primary"><i class="ri-bill-fill"></i>Primary</button> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>

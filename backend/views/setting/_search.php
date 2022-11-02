<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MstpegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mstpegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?= $form->field($model, 'grup_setting') ?>

    <?= $form->field($model, 'nama_setting') ?>

    <?= $form->field($model, 'nilai_setting') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-times" aria-hidden="true"></i> Batal', ['index'],['class' => 'btn mb-3 btn-warning']) ?>
        <?php
            $role = Yii::$app->user->identity->role->name; 
            if ($role == 'Super Admin') {
                echo Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']);
            }
         ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

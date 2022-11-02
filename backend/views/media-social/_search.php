<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MediaSocialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="media-social-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'sosmed_id') ?>

    <?= $form->field($model, 'sosmed_icon') ?>

    <?= $form->field($model, 'sosmed_url') ?>

    <?= $form->field($model, 'sosmed_status') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
        <?= Html::resetButton('<i class="fa fa-times" aria-hidden="true"></i> Batal', ['class' => 'btn mb-3 btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

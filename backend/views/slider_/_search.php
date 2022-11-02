<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SliderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        // 'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'slider_id') ?>

    <?php // echo $form->field($model, 'slider_image') ?>

    <?php // echo $form->field($model, 'slider_title') ?>

    <?php // echo $form->field($model, 'slider_h1') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManagemenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-managemen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'menu_id') ?>

    <?php // echo $form->field($model, 'menu_parent') ?>

    <?php // echo $form->field($model, 'menu_nama') ?>

    <?php // echo $form->field($model, 'menu_type') ?>

    <?php // echo $form->field($model, 'menu_item') ?>

    <?php // echo $form->field($model, 'menu_order') ?>

    <?php // echo $form->field($model, 'menu_status') ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

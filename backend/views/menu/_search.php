<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?php // echo $form->field($model, 'menu_id') ?>

    <?= $form->field($model, 'menu_parent') ?>

    <?= $form->field($model, 'menu_nama') ?>

    <?php // echo $form->field($model, 'menu_sorter') ?>

    <?php // echo $form->field($model, 'menu_url') ?>

    <?php echo $form->field($model, 'menu_status') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
        <?= Html::resetButton('<i class="fa fa-times" aria-hidden="true"></i> Batal', ['class' => 'btn mb-3 btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

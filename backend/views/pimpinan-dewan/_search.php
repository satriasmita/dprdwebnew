<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PimpinanDewanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pimpinan-dewan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pimpinan_id') ?>

    <?= $form->field($model, 'pimpinan_image') ?>

    <?= $form->field($model, 'pimpinan_ttl') ?>

    <?= $form->field($model, 'pimpinan_agama') ?>

    <?= $form->field($model, 'pimpinan_suamiistri') ?>

    <?php // echo $form->field($model, 'pimpinan_anak') ?>

    <?php // echo $form->field($model, 'pimpinan_alamat') ?>

    <?php // echo $form->field($model, 'pimpinan_pengalaman_organisasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

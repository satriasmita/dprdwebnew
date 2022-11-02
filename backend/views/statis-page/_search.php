<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StatisPageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statis-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
            

    <?php // echo $form->field($model, 'id_page') ?>
    <?php // echo $form->field($model, 'url_page') ?>

    <?php ActiveForm::end(); ?>

</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-ikm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'nama_surveyer') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'kode_survei') ?>
        </div>
        <div class="col-sm-3">
            <div class="form-group" style="padding-top: 25px">
                <?= Html::submitButton('<i class="fa fa-search"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
                <?= Html::a('<i class="fa fa-plus"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
                <?= Html::a('<i class="fa fa-times"></i> Batal', ['index'],['class' => 'btn mb-3 btn-warning']) ?>
            </div>
        </div>
        
    </div>

    <?php // echo $form->field($model, 'id_ikm') ?>

    

    <?php // echo $form->field($model, 'umur_surveyer') ?>

    <?php // echo $form->field($model, 'alamat_surveyer') ?>

    <?php // echo $form->field($model, 'pedidikan') ?>


    

    <?php // echo $form->field($model, 'kode_survei_detail') ?>

    <?php // echo $form->field($model, 'nilai_survei_detail') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'update_by') ?>


    <?php ActiveForm::end(); ?>

</div>

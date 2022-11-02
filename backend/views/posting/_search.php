<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\form\ActiveForm;
use backend\models\Kategori;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\PostingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        // 'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <div class="col-md-9">
        <div class="row">
            <div class="col-sm-4">
                <?php
                    $dataKategori = (new Kategori)->getListKategori();
                    echo $form->field($model, 'homepage_kategori')->dropDownList($dataKategori,
                        ['prompt'=>'Pilih Kategori']);
                ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'posting_status')->dropDownList([
                        '1' => 'Publish',
                        '2' => 'Unpublish',
                ]); ?>
            </div>
            <div class="col-sm-4">
                <div class="form-group" style="padding-top: 25px">
                    <?= Html::submitButton('<i class="fa fa-search"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
                    <?= Html::a('<i class="fa fa-plus"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
                    <?= Html::a('<i class="fa fa-times"></i> Batal', ['index'],['class' => 'btn mb-3 btn-warning']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <br><br><br>
        </div>
    </div>

    <?php // echo $form->field($model, 'posting_judul') ?>

    <?php // echo $form->field($model, 'posting_thumnail') ?>

    <?php // echo $form->field($model, 'posting_deskripsi') ?>

    <?php // echo $form->field($model, 'posting_status') ?>
    
    <?php // echo $form->field($model, 'posting_layout') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <?php // echo $form->field($model, 'trans_ip') ?>

    

    <?php ActiveForm::end(); ?>

</div>

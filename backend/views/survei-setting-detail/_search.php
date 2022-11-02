<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\SurveiKategori;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiSettingDetailmasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-setting-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-sm-3">
             <?php // echo $form->field($model, 'kode_survei') ?>
             <?php
                $dataKategori = (new SurveiKategori)->getKategoriSurvei();
                echo $form->field($model, 'kode_survei')->label('Nama Survei')->widget(Select2::classname(), [
                    'data' => $dataKategori,
                    'language' => 'id',
                    'options' => ['placeholder' => '-- Pilih Kategori--','class'=>'form-control'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); 
            ?>
        </div>
        <div class="col-sm-3">
            <div class="form-group" style="padding-top: 25px">
                <?= Html::submitButton('<i class="fa fa-search"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
                <?= Html::a('<i class="fa fa-plus"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
                <?= Html::a('<i class="fa fa-times"></i> Batal', ['index'],['class' => 'btn mb-3 btn-warning']) ?>
            </div>
        </div>
    </div>

    <?php // echo $form->field($model, 'id_survei') ?>

    <?php // echo $form->field($model, 'kode_survei_detail') ?>

    <?php // echo $form->field($model, 'nama_settingsurveidetail') ?>

    <?php // echo $form->field($model, 'nilai_surveidetail') ?>

    <?php ActiveForm::end(); ?>

</div>

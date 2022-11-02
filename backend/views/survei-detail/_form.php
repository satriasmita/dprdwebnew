<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\SurveiKategori;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'kode_survei')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'nama_survei_detail')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'jenis_input')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_input')->dropDownList([
            'radiolist' => 'radiolist',
            'checkbox' => 'checkbox',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

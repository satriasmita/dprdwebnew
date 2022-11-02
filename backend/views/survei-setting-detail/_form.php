<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\SurveiKategori;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiSettingDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-setting-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'kode_survei')->textInput(['maxlength' => true]) ?>

    <?php
        // $dataKategori = (new SurveiKategori)->getKategoriSurvei();
        // echo $form->field($model, 'kode_survei')->label('Nama Survei')->widget(Select2::classname(), [
        //     'data' => $dataKategori,
        //     'language' => 'id',
        //     'options' => ['placeholder' => '-- Pilih Kategori--','class'=>'form-control'],
        //     'pluginOptions' => [
        //         'allowClear' => true
        //     ],

        // ]); 
    ?>

    <?php
	        $dataKategori = (new SurveiKategori)->getKategoriSurvei();
	        echo $form->field($model, 'kode_survei')->widget(Select2::classname())->dropDownList($dataKategori,[
	            'prompt'=>'--Pilih--',
	            'onchange'=> '$.post("'.Yii::$app->urlManager->createUrl('survei-setting-detail/list-survei-detail?kode_survei=')
	                                    .'"+$(this).val(),function(data){
	                                           $("select#kode_survei_detail").html(data); 
	                                        })',
	            // 'disabled' => true
	        ])->label('Nama Survei');
	?>



    <?php // echo $form->field($model, 'kode_survei_detail')->textInput() ?>

    <?php 
	    $datasurveidetail = [];
	    echo $form->field($model, 'kode_survei_detail')->widget(Select2::classname())->dropDownList($datasurveidetail,[
            'prompt'=>'--Pilih Pertanyaan --',
            'id'=>'kode_survei_detail',
        ])->label('Pertanyaan'); 
	 ?>



    <?= $form->field($model, 'nama_settingsurveidetail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_surveidetail')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

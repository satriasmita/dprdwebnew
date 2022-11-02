<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\AtributPuskesmas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atribut-puskesmas-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
    	<div class="col-md-7">
    		<?= $form->field($model, 'jenis_atribut')->textInput(['maxlength' => true]) ?>

    		<?= $form->field($model, 'nama_atribut')->textInput(['maxlength' => true]) ?>

    		<?= $form->field($model, 'dekripsi_atribut')->textarea(['rows' => 10]) ?>

    	</div>

    	<div class="col-md-5">
    		<?php
		        echo $form->field($model, 'upload_atribut')->widget(FileInput::classname(), [
		            'options'=>[
		                'accept' => 'image/*',
		            ],
		            'pluginOptions' => [
		               
		                'maxFileSize'=>2024,
		                'showCaption' => false,
		                'showRemove' => true,
		                'showUpload' => true,
		                'browseOnZoneClick'=> true,
		                'browseClass' => 'btn btn-info',
		                'browseIcon' => '<i class="fa fa-search" aria-hidden="true"></i>',
		                'browseLabel' =>  'Cari'
		            ]
		        ])->label('Gambar Atribut');
		    ?>
    	</div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

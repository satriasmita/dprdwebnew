<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\SaranaPrasarana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-prasarana-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
    	<div class="col-sm-6">
    		<?= $form->field($model, 'nama_sarana')->textInput(['maxlength' => true]) ?>

    		<?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    		<?php
		        echo $form->field($model, 'upload_image_sarana')->widget(FileInput::classname(), [
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
		        ])->label('Foto Sarana Prasarana');
		    ?>

	    	<div class="form-group">
		        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
		    </div>
		    
    	</div>
    	
    </div>

    

    

    

    <?php ActiveForm::end(); ?>

</div>

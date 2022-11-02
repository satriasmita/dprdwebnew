<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

	<?php $form = ActiveForm::begin(['options'=>['encytype'=>'multipart/form-data']]); ?>

	<div class="row">
        <div class="col-sm-12">
        	<div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Slide</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                	

                    <?php
                        echo $form->field($model, 'slider_upload')->widget(FileInput::classname(), [
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
                        ])->label('Gambar Slider');
                    ?>

				    <?= $form->field($model, 'slider_title')->textInput(['maxlength' => true]) ?>

				    <?= $form->field($model, 'slider_h1')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="form-group">
		        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
		        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
		    </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>
    



</div>

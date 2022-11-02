<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use bajadev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unggah-file-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12">
        <div class="col-sm-6">
            <?= $form->field($model, 'jenis_unggah')->dropDownList([
                    '1' => 'Dokumen',
                    '2' => 'Aplikasi',
            ]); ?>

            <?= $form->field($model, 'nama_unggah')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'alamat_url')->textInput(['placeholder' => "Note: Inputkan jika data berupa Link URL"]) ?>

            <?= $form->field($model, 'keterangan_unggah')->widget(CKEditor::className(), [
                            'editorOptions' => [
                                'preset' => 'basic',
                                'height'=>'300px',
                                'inline' => false,
                                'filebrowserBrowseUrl' => 'browse-images',
                                'filebrowserUploadUrl' => 'upload-images',
                                //'extraPlugins' => 'imageuploader',
                            ],
                    ])->textArea(['rows'=>6]);  
                ?>

            <?= $form->field($model, 'status_unggah')->dropDownList([
                    '1' => 'Publish',
                    '2' => 'Unpublish',
            ]); ?>

        </div>

        <div class="col-sm-6">
            <?php
                echo $form->field($model, 'upload_file')->widget(FileInput::classname(), [
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
                ])->label('Upload File PDF');
            ?>
        </div>
        
    </div>

   

    



    <?php // echo $form->field($model, 'lokasi_unggah')->textInput(['maxlength' => true]) ?>
    

    <?php // echo $form->field($model, 'tanggal_unggah')->textInput() ?>

    <?php // echo $form->field($model, 'unggah_oleh')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawaifoto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawaifoto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_nip')->textInput(['readonly' => true]) ?>

    <?php
        echo $form->field($model, 'upload_foto')->widget(FileInput::classname(), [
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
        ])->label('Upload Foto');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

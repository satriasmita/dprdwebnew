<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\PimpinanDewan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pimpinan-dewan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">    
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_jabatan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'pimpinan_image')->textInput(['maxlength' => true]) ?> -->
    <?php if(!empty($model->pimpinan_image)){?>
            <img src="<?php echo Url::to('@web/images/Dewan/'. $model->pimpinan_image);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>

    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_ttl')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'pimpinan_agama')->textInput() ?> -->
    <?= $form->field($model, 'pimpinan_agama')->dropDownList([
                '1' => 'Islam',
                '2' => 'Protestan',
                '3' => 'Katolik',
                '4' => 'Hindu',
                '5' => 'Budha',
                '6' => 'Khonghucu'
            ]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_suamiistri')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_anak')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_alamat')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pimpinan_pengalaman_organisasi')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

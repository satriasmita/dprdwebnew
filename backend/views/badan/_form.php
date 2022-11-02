<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use backend\models\KategoriBadan;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Badan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="badan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">    
    <div class="col-md-6">
    <?= $form->field($model, 'badan_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_jabatan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'badan_kategori_id')->textInput() ?> -->
    <?= $form->field($model, 'badan_kategori_id')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriBadan::find()->all(),'badan_kategori_id','badan_kategori'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'badan_image')->textInput(['maxlength' => true]) ?> -->
    <?php if(!empty($model->berita_foto)){?>
            <img src="<?php echo Url::to('@web/images/Badan/'. $model->badan_image);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_ttl')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_agama')->textInput() ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_suamiistri')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_anak')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_alamat')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'badan_pengalaman_organisasi')->textarea(['rows' => 6]) ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

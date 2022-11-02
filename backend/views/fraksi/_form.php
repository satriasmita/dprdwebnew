<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\KategoriFraksi;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Fraksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fraksi-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">    
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_jabatan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
      <?= $form->field($model, 'fraksi_kategori_id')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriFraksi::find()->all(),'fraksi_kategori_id','fraksi_kat'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <!-- <div class="col-md-6">
    ?= $form->field($model, 'fraksi_image')->textInput(['maxlength' => true]) ?>
    </div> -->
    <div class="col-md-6">
        <?php if(!empty($model->fraksi_image)){?>
            <img src="<?php echo Url::to('@web/images/Fraksi/'. $model->fraksi_image);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_ttl')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'fraksi_agama')->textInput() ?> -->
    <?= $form->field($model, 'fraksi_agama')->dropDownList([
                '1' => 'Islam',
                '2' => 'Protestan',
                '3' => 'Katolik',
                '4' => 'Hindu',
                '5' => 'Budha',
                '6' => 'Khonghucu'
            ]) ?>
    
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_suamiistri')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_anak')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_alamat')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fraksi_pengalaman_organisasi')->textarea(['rows' => 6]) ?>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

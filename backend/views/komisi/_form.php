<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use backend\models\KategoriKomisi;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Komisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komisi-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">    
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_jabatan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'komisi_kategori_id')->textInput() ?> -->
    <?= $form->field($model, 'komisi_kategori_id')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriKomisi::find()->all(),'komisi_kategori_id','komisi_kategori'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'komisi_image')->textInput(['maxlength' => true]) ?> -->
    <?php if(!empty($model->komisi_image)){?>
            <img src="<?php echo Url::to('@web/images/Komisi/'. $model->komisi_image);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_ttl')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_agama')->textInput() ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_suamiistri')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_anak')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_alamat')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'komisi_pengalaman_organisasi')->textarea(['rows' => 6]) ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

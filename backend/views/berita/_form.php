<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;
use yii\helpers\Url;
use backend\models\KategoriBerita;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">    
    <div class="col-md-6">
    <?= $form->field($model, 'berita_judul')->textInput(['maxlenght' => true]) ?>
    </div>
    <div class="col-md-6">
        <!-- ?= $form->field($model, 'berita_foto')->textarea(['rows' => 6]) ?>  -->
        <?php if(!empty($model->berita_foto)){?>
            <img src="<?php echo Url::to('@web/images/Berita/'. $model->berita_foto);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'berita_isi')->textarea(['rows' => 6]) ?>
    </div>
    <!-- <div class="col-md-6">
    ?= $form->field($model, 'berita_tanggal')->textInput() ?>
    </div> -->
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'berita_status')->textInput() ?> -->
    <?= $form->field($model, 'berita_status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
    </div>
    <div class="col-md-6">
    <!-- ?= $form->field($model, 'kategori_id')->textInput() ?> -->
    <?= $form->field($model, 'kategori_id')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriBerita::find()->all(),'kategori_id','kategori_name'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

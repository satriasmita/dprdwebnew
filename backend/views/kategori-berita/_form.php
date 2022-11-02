<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriBerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-berita-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <div class="col-md-3">
    <?= $form->field($model, 'kategori_name')->textInput(['maxlength' => true]) ?>
    </div>

    
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

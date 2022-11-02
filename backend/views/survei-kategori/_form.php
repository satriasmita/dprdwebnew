<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="survei-kategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_survei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_survei')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

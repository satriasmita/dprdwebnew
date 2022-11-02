<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-instansi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_upt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_upt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_wa')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kategori_id')->textInput() ?>

    <?= $form->field($model, 'kategori_nama')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'kategori_status')->textInput() ?>

    <?= $form->field($model, 'kategori_status')->dropDownList([
                    // 'prompt'=>'Pilih Grup Kode',
                    '1' => 'Aktif',
                    '2'=>'Tidak Aktif',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

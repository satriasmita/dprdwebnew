<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StatisPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statis-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_page')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_page')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

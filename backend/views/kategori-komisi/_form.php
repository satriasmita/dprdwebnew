<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriKomisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-komisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'komisi_kategori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

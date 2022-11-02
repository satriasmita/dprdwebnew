<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MediaSocial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="media-social-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'sosmed_icon')->textInput() ?>
    <?= $form->field($model, 'sosmed_icon')->dropDownList([
                    'prompt'=>'Pilih Jenis Sosmed',
                    '1' => 'Facebook',
                    '2'=>'Instagram',
                    '3'=>'Twitter',
                    '4'=>'Email',
                    '5'=>'Website',
    ]); ?>

    <?= $form->field($model, 'sosmed_url')->textInput() ?>

    <?php // echo $form->field($model, 'sosmed_status')->textInput() ?>
    <?= $form->field($model, 'sosmed_status')->dropDownList([
                    // 'prompt'=>'Pilih Grup Kode',
                    '1' => 'Aktif',
                    '2'=>'Tidak Aktif',
    ]); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

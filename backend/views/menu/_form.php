<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Menu;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo  $form->field($model, 'menu_id')->textInput() ?>

    <?php // echo $form->field($model, 'menu_parent')->textInput() ?>

    <?php 
        $data = ArrayHelper::map(Menu::find()->all(),'menu_id','menu_nama'); 
            echo $form->field($model, 'menu_parent')->dropDownList($data,
            ['prompt'=>'--Pilih Parent Menu--']
                );
    ?>

    <?= $form->field($model, 'menu_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_sorter')->textInput() ?>

    <?= $form->field($model, 'menu_url')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'menu_status')->textInput() ?>
    <?= $form->field($model, 'menu_status')->dropDownList([
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

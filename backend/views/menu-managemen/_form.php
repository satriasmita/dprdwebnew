<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\MenuManagemen;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManagemen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-managemen-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12">
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'menu_nama')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?php 
                    $dataMenu =(new MenuManagemen)->getDropdownDataMenu();
                    echo $form->field($model, 'menu_parent')->dropDownList($dataMenu,[
                        'prompt'=>'Pilih induk..'
                    ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'menu_type')->dropDownList([
                    'category' => 'Kategori Posting',
                    'link'=>'Link/Url',
                    'post'=>'Single Posting',
                    'statis_page'=>'Halaman Statis',
                ],               
                [
                    'prompt'=>'Pilih Tipe Menu',
                    'onchange'=> '$.post("'.Yii::$app->urlManager->createUrl('menu-managemen/list-menu?menu_type=')
                                            .'"+$(this).val(),function(data){
                                                   $("select#menu_item").html(data); 
                                                })',
                ]
                )->hint('Jika tipe menu Link/URL menu item harus diketik'); ?>
            </div>
            <div class="col-sm-6">
                <?php 
                    $datamenuitem = [];
                    echo $form->field($model, 'menu_item')->widget(Select2::classname(), [
                        
                        'data' => $datamenuitem,
                        'options' => ['multiple' => false,'id'=>'menu_item'],
                        'pluginOptions' => [
                            'tags' => true,
                            'tokenSeparators' => [',', ' '],
                            // 'maximumInputLength' => 10
                        ],
                    ])->label('Menu Item');
                 ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'menu_order')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'menu_status')->dropDownList([
                    '1' => 'Aktif',
                    '2'=>'Tidak Aktif',
                ]); ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
            <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

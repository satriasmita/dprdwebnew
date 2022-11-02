<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use bajadev\ckeditor\CKEditor;
use kartik\select2\Select2;
use backend\models\Kategori;
use backend\models\PostingKategori;
use backend\models\Menu;
use backend\models\MenuManagemen;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Posting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posting-form">

    <?php $form = ActiveForm::begin(['options'=>['encytype'=>'multipart/form-data']]); ?>
    <div class="col-md-12">
        ATTENTION!!
        </div>
        <div class="col-md-12">
        MENU INI KHUSUS UNTUK UPLOAD GALERI FOTO DPRD (UNTUK SEMUA OPSI KATEGORI DI ISI DENGAN PILIHAN GALERI)
        </div>
        <div class="col-md-12">
        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
    <div class="col-md-6">
        <div class="row">
        
        
            <div class="col-sm-6">
                <?php
                    $dataKategori = (new Kategori)->getListKategori();
                    echo $form->field($model, 'homepage_kategori')->label('Homepage Kategori')->widget(Select2::classname(), [
                        'data' => $dataKategori,
                        'language' => 'id',
                        'options' => ['placeholder' => '-- Pilih Kategori--','class'=>'form-control'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); 
                ?>
            </div>
            <div class="col-sm-6">
                <?php
                    $dataPostKategori = (new PostingKategori)->getDropDownPostingKategori(); 
                    echo $form->field($model, 'posting_category')->label('Posting Kategori')->widget(Select2::classname(), [
                        'data' => $dataPostKategori,
                        'language' => 'id',
                        'options' => ['placeholder' => '-- Pilih Posting Kategori--','class'=>'form-control'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <?php
                    $ListMenu = (new MenuManagemen)->getDropdownDataMenu(); 
                    echo $form->field($model, 'posting_menu')->label('Menu')->widget(Select2::classname(), [
                        'data' => $ListMenu,
                        'language' => 'id',
                        'options' => ['placeholder' => '-- Pilih Menu--','class'=>'form-control'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); 
                ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'posting_status')->dropDownList([
                        '1' => 'Publish',
                        '2' => 'Unpublish',
                ]); ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'posting_layout')->dropDownList([
                        '1' => 'One Layout',
                        '2' => 'Many Layout',
                ]); ?>
            </div>
        </div>

        <?= $form->field($model, 'posting_judul')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'posting_deskripsi')->widget(CKEditor::className(), [
                    'editorOptions' => [
                        'preset' => 'full',
                        'height'=>'300px',
                        'inline' => false,
                        'filebrowserBrowseUrl' => 'browse-images',
                        'filebrowserUploadUrl' => 'upload-images',
                        //'extraPlugins' => 'imageuploader',
                    ],
            ])->textArea(['rows'=>6]);  
        ?>

        
    </div>

    <div class="col-md-6">
        <?php
            echo $form->field($model, 'upload_icon')->widget(FileInput::classname(), [
                'options'=>[
                    'accept' => 'image/*',
                ],
                'pluginOptions' => [
                   
                    'maxFileSize'=>2024,
                    'showCaption' => false,
                    'showRemove' => true,
                    'showUpload' => true,
                    'browseOnZoneClick'=> true,
                    'browseClass' => 'btn btn-info',
                    'browseIcon' => '<i class="fa fa-search" aria-hidden="true"></i>',
                    'browseLabel' =>  'Cari'
                ]
            ])->label('Logo/Icon Posting');
        ?>

        <?php
            echo $form->field($model, 'upload_image_utama')->widget(FileInput::classname(), [
                'options'=>[
                    'accept' => 'image/*',
                ],
                'pluginOptions' => [
                   
                    'maxFileSize'=>2024,
                    'showCaption' => false,
                    'showRemove' => true,
                    'showUpload' => true,
                    'browseOnZoneClick'=> true,
                    'browseClass' => 'btn btn-info',
                    'browseIcon' => '<i class="fa fa-search" aria-hidden="true"></i>',
                    'browseLabel' =>  'Cari'
                ]
            ])->label('Gambar Utama');
        ?>
    </div>



        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col">
                        <!-- <input type="text" class="form-control" placeholder="First name"> -->
                        

                        
                    </div>
                    <div class="col">
                        
                        
                    </div>
                </div>
                <?php // echo $form->field($model, 'posting_kategori')->textInput() ?>
                
                

                <?php
                    // $listMenu = ArrayHelper::map(Menu::find()->all(),'menu_id','menu_nama');
                    // echo $form->field($model, 'posting_menu')->dropDownList($listMenu,['prompt'=>'Pilih Menu','class'=>'form-control']);
                ?>

                
                

                

                

                <?php // echo $form->field($model, 'posting_thumnail')->textInput(['maxlength' => true]) ?>
                
                <div class="row">
                    <div class="col">
                        <!-- <input type="text" class="form-control" placeholder="First name"> -->
                        
                    </div>
                    <div class="col">
                        <!-- <input type="text" class="form-control" placeholder="Last name"> -->
                        
                    </div>
                </div>
                
                

                

            </div>

            <div class="col-sm-6">
                

                <?php // echo $form->field($model, 'posting_deskripsi')->textarea(['rows' => 6]) ?>
                

            
            </div>
        </div>
 
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-warning']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>

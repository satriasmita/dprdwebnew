<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\SkpdTbl;
use backend\models\SatkerTbl;
use backend\models\BidangTbl;
use backend\models\Setting;

/* @var $this yii\web\View */
/* @var $model backend\models\Setting */
/* @var $form yii\widgets\ActiveForm */

if (Yii::$app->user->identity->role->name == 'Super Admin') {
   $readonly = false;
} else{
    $readonly = true;
}
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_urut')->textInput(['readonly' => $readonly]) ?>

    <?= $form->field($model, 'grup_setting')->textInput(['readonly' => $readonly]) ?>

    <?= $form->field($model, 'nama_setting')->textInput(['readonly' => $readonly]) ?>

    <?php
        if ($model->nama_setting=='Jenis Web') {
            echo $form->field($model, 'nilai_setting')->dropDownList([
                'OPD' => 'OPD',
                'UPT' => 'UPT',
                // 'BIDANG' => 'UPT',
            ]);
        }elseif ($model->nama_setting=='SKPD') {
            $dataSkpd = (new SkpdTbl)->getDropDownKdskpd();
            echo $form->field($model, 'nilai_setting')->label('Nilai Setting')->widget(Select2::classname(), [
                'data' => $dataSkpd,
                'language' => 'id',
                'options' => ['placeholder' => '-- Pilih Nilai Setting--','class'=>'form-control'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        } elseif ($model->nama_setting=='Satker') {

            $skpd = (new Setting)->find()->where(['nama_setting'=>'SKPD'])->one();
            $KDSKPD = $skpd->nilai_setting;

            $dataSatker = (new SatkerTbl)->getDropDownKodeSatker($KDSKPD);
            echo $form->field($model, 'nilai_setting')->label('Nilai Setting')->widget(Select2::classname(), [
                'data' => $dataSatker,
                'language' => 'id',
                'options' => ['placeholder' => '-- Pilih Nilai Setting--','class'=>'form-control'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
        } elseif ($model->nama_setting=='Bidang') {

            $skpd = (new Setting)->find()->where(['nama_setting'=>'SKPD'])->one();
            $satker = (new Setting)->find()->where(['nama_setting'=>'Satker'])->one();
            
            $KDSKPD = $skpd->nilai_setting;
            $KDSATKER = $satker->nilai_setting;

            $dataBidang = (new BidangTbl)->getDropDownKodeBidang($KDSATKER);
            echo $form->field($model, 'nilai_setting')->label('Nilai Setting')->widget(Select2::classname(), [
                'data' => $dataBidang,
                'language' => 'id',
                'options' => ['placeholder' => '-- Pilih Nilai Setting--','class'=>'form-control','multiple' => true],
                'pluginOptions' => [
                    'allowClear' => true,
                    // 'tags' => true,
                    'tokenSeparators' => [',', ' '],
                ],
            ]);
        }

        else{
            echo $form->field($model, 'nilai_setting')->textInput(); 
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MstpegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mstpegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
        'type'=>ActiveForm::TYPE_INLINE
    ]); ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'NAMA') ?>

    <?php // echo $form->field($model, 'GLRDEPAN') ?>

    <?php // echo $form->field($model, 'GLRBELAKANG') ?>

    <?php // echo $form->field($model, 'KDJENKEL') ?>

    <?php // echo $form->field($model, 'TEMPATLHR') ?>

    <?php // echo $form->field($model, 'KDKAB') ?>

    <?php // echo $form->field($model, 'TGLLHR') ?>

    <?php // echo $form->field($model, 'AGAMA') ?>

    <?php // echo $form->field($model, 'KDDIDIK') ?>

    <?php // echo $form->field($model, 'TMTCAPEG') ?>

    <?php // echo $form->field($model, 'TMTPNS') ?>

    <?php // echo $form->field($model, 'KDSTAWIN') ?>

    <?php // echo $form->field($model, 'KDSTAPEG') ?>

    <?php // echo $form->field($model, 'TMTSTOP') ?>

    <?php // echo $form->field($model, 'KDPANGKAT') ?>

    <?php // echo $form->field($model, 'KDESELON') ?>

    <?php // echo $form->field($model, 'KDSTRUKTURAL') ?>

    <?php // echo $form->field($model, 'TMTJABATANS') ?>

    <?php // echo $form->field($model, 'KDFUNGSI') ?>

    <?php // echo $form->field($model, 'TMTJABATAN') ?>

    <?php // echo $form->field($model, 'KDFUNGSIUMUM') ?>

    <?php // echo $form->field($model, 'TMTJABATANFU') ?>

    <?php // echo $form->field($model, 'KDGURU') ?>

    <?php // echo $form->field($model, 'KDSSBP') ?>

    <?php echo $form->field($model, 'KDSKPD') ?>

    <?php echo $form->field($model, 'KDSATKER') ?>

    <?php echo $form->field($model, 'BIDANGF') ?>

    <?php // echo $form->field($model, 'SUBF') ?>

    <?php // echo $form->field($model, 'ALAMAT') ?>

    <?php // echo $form->field($model, 'NOTELP') ?>

    <?php // echo $form->field($model, 'NOKTP') ?>

    <?php // echo $form->field($model, 'NPWP') ?>

    <?php // echo $form->field($model, 'NIPLAMA') ?>

    <?php // echo $form->field($model, 'CATATAN') ?>

    <?php // echo $form->field($model, 'NOKARPEG') ?>

    <?php // echo $form->field($model, 'KARISKARSU') ?>

    <?php // echo $form->field($model, 'STATUSAKTIF') ?>

    <?php // echo $form->field($model, 'NAMAIBU') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'FOTO') ?>

    <?php // echo $form->field($model, 'LEMARI') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-search" aria-hidden="true"></i> Cari', ['class' => 'btn mb-3 btn-primary']) ?>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah', ['create'], ['class' => 'btn mb-3 btn-success']) ?>
        <?= Html::resetButton('<i class="fa fa-times" aria-hidden="true"></i> Batal', ['class' => 'btn mb-3 btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

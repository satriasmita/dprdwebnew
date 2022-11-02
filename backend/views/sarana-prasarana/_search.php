<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SaranaPrasaranaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-prasarana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tambah Sarana', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

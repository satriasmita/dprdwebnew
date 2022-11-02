<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SaranaPrasarana */

$this->title = 'Tambah Sarana Prasarana';
$this->params['breadcrumbs'][] = ['label' => 'Sarana Prasaranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

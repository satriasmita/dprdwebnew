<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatisPage */

$this->title = 'Tambah Halaman Statis';
$this->params['breadcrumbs'][] = ['label' => 'Statis Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

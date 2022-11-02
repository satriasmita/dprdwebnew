<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posting */

$this->title = 'Tambah Postingan';
$this->params['breadcrumbs'][] = ['label' => 'Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

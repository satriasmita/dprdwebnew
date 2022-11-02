<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PostingKategori */

$this->title = 'Tambah Kategori Posting';
$this->params['breadcrumbs'][] = ['label' => 'Posting Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

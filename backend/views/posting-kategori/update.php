<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PostingKategori */

$this->title = 'Update Posting Kategori: ' . $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Posting Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posting-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

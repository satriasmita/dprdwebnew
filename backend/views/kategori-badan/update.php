<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriBadan */

$this->title = 'Update Kategori Badan: ' . $model->badan_kategori_id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Badans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->badan_kategori_id, 'url' => ['view', 'id' => $model->badan_kategori_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-badan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

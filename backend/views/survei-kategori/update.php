<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiKategori */

$this->title = 'Update Survei Kategori: ' . $model->kode_survei;
$this->params['breadcrumbs'][] = ['label' => 'Survei Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_survei, 'url' => ['view', 'id' => $model->kode_survei]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="survei-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriFraksi */

$this->title = 'Update Kategori Fraksi: ' . $model->fraksi_kategori_id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Fraksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fraksi_kategori_id, 'url' => ['view', 'id' => $model->fraksi_kategori_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-fraksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

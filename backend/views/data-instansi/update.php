<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansi */

$this->title = 'Update Data Instansi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Instansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-instansi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PimpinanDewan */

$this->title = 'Update Pimpinan Dewan: ' . $model->pimpinan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pimpinan Dewans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pimpinan_id, 'url' => ['view', 'id' => $model->pimpinan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pimpinan-dewan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

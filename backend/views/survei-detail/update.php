<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiDetail */

$this->title = 'Update Survei Detail: ' . $model->kode_survei_detail;
$this->params['breadcrumbs'][] = ['label' => 'Survei Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_survei_detail, 'url' => ['view', 'id' => $model->kode_survei_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="survei-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

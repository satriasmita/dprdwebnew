<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiSettingDetail */

$this->title = 'Update Survei Setting Detail: ' . $model->id_survei;
$this->params['breadcrumbs'][] = ['label' => 'Survei Setting Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_survei, 'url' => ['view', 'id' => $model->id_survei]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="survei-setting-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

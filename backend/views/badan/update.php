<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Badan */

$this->title = 'Update Badan: ' . $model->badan_id;
$this->params['breadcrumbs'][] = ['label' => 'Badans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->badan_id, 'url' => ['view', 'id' => $model->badan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="badan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

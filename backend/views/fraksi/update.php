<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fraksi */

$this->title = 'Update Fraksi: ' . $model->fraksi_id;
$this->params['breadcrumbs'][] = ['label' => 'Fraksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fraksi_id, 'url' => ['view', 'id' => $model->fraksi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fraksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

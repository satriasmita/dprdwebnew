<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SaranaPrasarana */

$this->title = 'Update Sarana Prasarana: ' . $model->id_sarana;
$this->params['breadcrumbs'][] = ['label' => 'Sarana Prasaranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sarana, 'url' => ['view', 'id' => $model->id_sarana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sarana-prasarana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

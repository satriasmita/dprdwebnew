<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Komisi */

$this->title = 'Update Komisi: ' . $model->komisi_id;
$this->params['breadcrumbs'][] = ['label' => 'Komisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->komisi_id, 'url' => ['view', 'id' => $model->komisi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="komisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

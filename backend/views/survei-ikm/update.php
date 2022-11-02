<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkm */

$this->title = 'Update Survei Ikm: ' . $model->id_ikm;
$this->params['breadcrumbs'][] = ['label' => 'Survei Ikms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ikm, 'url' => ['view', 'id' => $model->id_ikm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="survei-ikm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

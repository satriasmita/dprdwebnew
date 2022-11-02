<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AtributPuskesmas */

$this->title = 'Update Atribut Puskesmas: ' . $model->id_atribut;
$this->params['breadcrumbs'][] = ['label' => 'Atribut Puskesmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_atribut, 'url' => ['view', 'id' => $model->id_atribut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atribut-puskesmas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

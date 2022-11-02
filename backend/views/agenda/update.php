<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */

$this->title = 'Update Agenda: ' . $model->agenda_id;
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->agenda_id, 'url' => ['view', 'id' => $model->agenda_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agenda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatisPage */

$this->title = 'Update Statis Page: ' . $model->id_page;
$this->params['breadcrumbs'][] = ['label' => 'Statis Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_page, 'url' => ['view', 'id' => $model->id_page]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statis-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

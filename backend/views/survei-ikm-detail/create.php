<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkmDetail */

$this->title = 'Create Survei Ikm Detail';
$this->params['breadcrumbs'][] = ['label' => 'Survei Ikm Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-ikm-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

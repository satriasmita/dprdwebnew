<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkm */

$this->title = 'Create Survei Ikm';
$this->params['breadcrumbs'][] = ['label' => 'Survei Ikms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-ikm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */

$this->title = 'Update Slider: ' . $model->slider_id;
$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->slider_id, 'url' => ['view', 'id' => $model->slider_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="box box-success">
    <div class="box-body">
    	<?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>
</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AtributPuskesmas */

$this->title = 'Tambah Atribut Puskesmas';
$this->params['breadcrumbs'][] = ['label' => 'Atribut Puskesmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-success">
    <div class="box-body">
    	<?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>
</div>

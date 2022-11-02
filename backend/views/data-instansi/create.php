<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataInstansi */

$this->title = 'Tambah Data Instansi';
$this->params['breadcrumbs'][] = ['label' => 'Data Instansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-success">
    <div class="box-body">
    	<?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>
</div>

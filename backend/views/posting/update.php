<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posting */

$this->title = 'Update Posting: ' . $model->posting_judul;
$this->params['breadcrumbs'][] = ['label' => 'Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->posting_id, 'url' => ['view', 'id' => $model->posting_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="box box-success">
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PimpinanDewan */

$this->title = 'Tambah Pimpinan Dewan';
$this->params['breadcrumbs'][] = ['label' => 'Pimpinan Dewans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pimpinan-dewan-create">
<div class="box box-solid box-success">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>

	    <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
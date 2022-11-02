<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriBerita */

$this->title = 'Update Kategori Berita: ' . $model->kategori_id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kategori_id, 'url' => ['view', 'id' => $model->kategori_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-berita-update">
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
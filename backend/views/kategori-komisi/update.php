<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriKomisi */

$this->title = 'Update Kategori Komisi: ' . $model->komisi_kategori_id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Komisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->komisi_kategori_id, 'url' => ['view', 'id' => $model->komisi_kategori_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-komisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

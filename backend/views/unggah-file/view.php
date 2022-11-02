<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFile */

$this->title = $model->id_unggah;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unggah Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="unggah-file-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_unggah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_unggah], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_unggah',
            'jenis_unggah',
            'nama_unggah',
            'alamat_ulr',
            'keterangan_unggah:ntext',
            'lokasi_unggah',
            'tanggal_unggah',
            'unggah_oleh',
            'status_unggah',
        ],
    ]) ?>

</div>

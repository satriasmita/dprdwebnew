<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Badan */

// $this->title = $model->badan_id;
$this->title = 'Nama : '.StringHelper::truncateWords(strip_tags($model->badan_nama),20);

$this->params['breadcrumbs'][] = ['label' => 'Badan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="badan-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->badan_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->badan_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'badan_id',
            'badan_nama',
            'badan_jabatan',
            'badan_kategori_id',
            // 'badan_image',
            [
                'attribute' => 'badan_image',
                'label' => 'Foto',
                'contentOptions'=>['style'=>'text-align: left;'],
                'format' => 'html',    
                'filter'=> false,
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/Badan/'. $data['badan_image'],
                        ['height' => '200px']);
                },
            ],
            'badan_ttl',
            'badan_agama',
            'badan_suamiistri',
            'badan_anak',
            'badan_alamat:ntext',
            'badan_pengalaman_organisasi:ntext',
        ],
    ]) ?>

</div>

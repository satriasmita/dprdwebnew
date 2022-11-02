<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Fraksi */

// $this->title = $model->fraksi_id;
$this->title = 'Nama : '.StringHelper::truncateWords(strip_tags($model->fraksi_nama),20);
$this->params['breadcrumbs'][] = ['label' => 'Fraksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fraksi-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->fraksi_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->fraksi_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'fraksi_id',
            'fraksi_nama',
            'fraksi_jabatan',
            // 'fraksi_kategori_id',
            [
                'attribute' => 'kategoriFraksi.fraksi_kat',
                'label' => 'Kategori',
            ],
            // 'fraksi_image',
            [
                'attribute' => 'fraksi_image',
                'label' => 'Foto',
                'contentOptions'=>['style'=>'text-align: left;'],
                'format' => 'html',    
                'filter'=> false,
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/Fraksi/'. $data['fraksi_image'],
                        ['height' => '200px']);
                },
            ],
            'fraksi_ttl',
            
            [
                'attribute'=>'fraksi_agama',
                'value' => $model->fraksi_agama == 1 ? 'Islam' : ($model->fraksi_agama == 2 ? 'Tidak Protestan' : $model->fraksi_agama == 3 ? 'Katolik' : $model->fraksi_agama == 4 ? 'Hindu' : $model->fraksi_agama == 5 ? 'Budha' : $model->fraksi_agama == 6 ? 'Khonghucu' : ''),
            ],
            'fraksi_suamiistri',
            'fraksi_anak',
            'fraksi_alamat:ntext',
            'fraksi_pengalaman_organisasi:ntext',
        ],
    ]) ?>

</div>

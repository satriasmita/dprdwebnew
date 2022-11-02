<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\PimpinanDewan */

// $this->title = $model->pimpinan_id;
$this->title = 'Nama : '.StringHelper::truncateWords(strip_tags($model->pimpinan_nama),20);

$this->params['breadcrumbs'][] = ['label' => 'Pimpinan Dewan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pimpinan-dewan-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->pimpinan_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->pimpinan_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'pimpinan_id',
            // 'pimpinan_image',
            'pimpinan_nama',
            'pimpinan_jabatan',
            [
                'attribute' => 'pimpinan_image',
                'label' => 'Foto',
                'contentOptions'=>['style'=>'text-align: left;'],
                'format' => 'html',    
                'filter'=> false,
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/Dewan/'. $data['pimpinan_image'],
                        ['height' => '200px']);
                },
            ],
            'pimpinan_ttl',
            // 'pimpinan_agama',
            [
                'attribute'=>'pimpinan_agama',
                'value' => $model->pimpinan_agama == 1 ? 'Islam' : ($model->pimpinan_agama == 2 ? 'Tidak Protestan' : $model->pimpinan_agama == 3 ? 'Katolik' : $model->pimpinan_agama == 4 ? 'Hindu' : $model->pimpinan_agama == 5 ? 'Budha' : $model->pimpinan_agama == 6 ? 'Khonghucu' : ''),
            ],
            'pimpinan_suamiistri',
            'pimpinan_anak',
            'pimpinan_alamat:ntext',
            'pimpinan_pengalaman_organisasi:ntext',
        ],
    ]) ?>

</div>

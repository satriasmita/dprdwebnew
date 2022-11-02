<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Komisi */

// $this->title = $model->komisi_id;
$this->title = 'Nama : '.StringHelper::truncateWords(strip_tags($model->komisi_nama),20);
$this->params['breadcrumbs'][] = ['label' => 'Komisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="komisi-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->komisi_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->komisi_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'komisi_id',
            'komisi_nama',
            'komisi_jabatan',
            // 'komisi_kategori_id',
            [
                'attribute' => 'kategoriKomisi.komisi_kategori',
                'label' => 'Kategori',
            ],
            // 'komisi_image',
            [
                'attribute' => 'komisi_image',
                'label' => 'Foto',
                'contentOptions'=>['style'=>'text-align: left;'],
                'format' => 'html',    
                'filter'=> false,
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/Komisi/'. $data['komisi_image'],
                        ['height' => '200px']);
                },
            ],
            'komisi_ttl',
            'komisi_agama',
            'komisi_suamiistri',
            'komisi_anak',
            'komisi_alamat:ntext',
            'komisi_pengalaman_organisasi:ntext',
        ],
    ]) ?>

</div>
</div>
</div>
</div>
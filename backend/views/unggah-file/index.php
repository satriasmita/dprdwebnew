<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UnggahFileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Unggah File dan Aplikasi');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unggah-file-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_unggah',
            // 'jenis_unggah',
            [
                'attribute' => 'jenis_unggah',
                'format'=>'html', 
                'label'=>'Jenis Unggah',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $unggahjenis =$model->jenis_unggah;
                    if ($unggahjenis == 1) {
                       $status = 'Dokumen';
                    } elseif ($unggahjenis == 2) {
                        $status = 'Aplikasi';
                    } 
                    return $status;
                },
            ],
            'nama_unggah',
            'alamat_url',
            'keterangan_unggah:ntext',
            'lokasi_unggah',
            'tanggal_unggah',
            // [
            //     'attribute'=>'tanggal_unggah',
            //     'value' => function($model){
            //         return $model->tglIndo->profile ?  $model->authorCreate->profile->full_name : '-';
            //      }
            // ],
            // 'unggah_oleh',
            [
                'attribute'=>'unggah_oleh',
                'value' => function($model){
                    return $model->authorCreate->profile ?  $model->authorCreate->profile->full_name : '-';
                 }
            ],
            // 'status_unggah',
            [
                'attribute' => 'status_unggah',
                'format'=>'html', 
                'label'=>'Status Unggah',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $statusunggah =$model->status_unggah;
                    if ($statusunggah == 1) {
                       $status = '<span class="badge badge-pill badge-info">Publish</span>';
                    } elseif ($statusunggah == 2) {
                        $status = '<span class="badge badge-pill badge-danger">Unpiblish</span>';
                    } 
                    return $status;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

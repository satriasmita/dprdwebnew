<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Posting';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'posting_id',
            // 'posting_kategori',
            [
                'attribute'=>'homepage_kategori',
                'label'=>'Homepage Kategori',
                'value'=>function($model){
                    return $model->listKategori ? $model->listKategori->kategori_nama: '-';
                }
            ],
            [
                'attribute'=>'posting_category',
                'label'=>'Posting Kategori',
                'value'=>function($model){
                    return $model->postingKategori ? $model->postingKategori->nama_kategori: '-';
                }
            ],
            'posting_judul',
            // 'posting_icon', 
            [
                'attribute'=>'posting_icon',
                'format'=>'html',
                'label'=>'Icon',
                'value' => function ($model){
                    $root_folder = Yii::getAlias('@root');
                    $icon = Html::img($root_folder.$model->posting_icon,['height'=>40]);
                    return $icon;
                }
            ],
            // 'posting_image_utama',
            [
                'attribute'=>'posting_image_utama',
                'format'=>'html',
                'label'=>'Gambar Utama',
                'value' => function ($model){
                    $root_folder = Yii::getAlias('@root');
                    $gambar = Html::img($root_folder.$model->posting_image_utama,['height'=>40]);
                    return $gambar;
                }
            ],
            //'posting_deskripsi:ntext',
            // 'posting_status',
            [
                'attribute' => 'posting_status',
                'format'=>'html', 
                'label'=>'Status',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $pstatus_post =$model->posting_status;
                    if ($pstatus_post == 1) {
                       $status = '<span class="badge badge-pill badge-success">Pulish</span>';
                    } elseif ($pstatus_post == 2) {
                        $status = '<span class="badge badge-pill badge-warning">Unpublish</span>';
                    } 
                    return $status;
                },
            ],
            // 'posting_layout',
            [
                'attribute' => 'posting_layout',
                'format'=>'html', 
                'label'=>'Layout',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $layout_post =$model->posting_layout;
                    if ($layout_post == 1) {
                       $status = '<span class="badge badge-pill badge-info">Single</span>';
                    } elseif ($layout_post == 2) {
                        $status = '<span class="badge badge-pill badge-primary">Multiple</span>';
                    } 
                    return $status;
                },
            ],
            //'create_at',
            //'update_at',
            // 'create_by',
            [
                'attribute'=>'create_by',
                'value' => function($model){
                    return $model->authorCreate->profile ?  $model->authorCreate->profile->full_name : '-';
                 }
            ],
            //'update_by',
            //'trans_ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

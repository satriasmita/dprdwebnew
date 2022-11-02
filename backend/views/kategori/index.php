<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Tampilan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'kategori_id',
            'kategori_nama',
            // 'kategori_status',
             [
                'attribute' => 'kategori_status',
                'format'=>'html', 
                'label'=>'Status',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $color =$model->kategori_status;
                    if ($color == 1) {
                       $status = '<span class="badge badge-pill badge-success">Aktif</span>';
                    } elseif ($color == 2) {
                        $status = '<span class="badge badge-pill badge-warning">Tidak Aktif</span>';
                    } 
                    return $status;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'menu_id',
            'menu_nama',
            // 'menu_parent',
             [
                'attribute'=>'parent_menu',
                'value' => function($model){
                    return $model->dataParent ? $model->dataParent->menu_nama : '-';
                 }
            ],
            'menu_sorter',
            'menu_url:url',
            // 'menu_status',
             [
                'attribute' => 'menu_status',
                'format'=>'html', 
                'label'=>'Status',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $color =$model->menu_status;
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

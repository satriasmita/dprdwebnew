<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuManagemenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-managemen-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'menu_id',
            // 'menu_parent',
            [
                'attribute'=>'menu_parent',
                'value' => function($model){
                    return $model->dataParent ? $model->dataParent->menu_nama : '-';
                 }
            ],
            'menu_nama',
            'menu_type',
            'menu_item',  
            'menu_order',
            'menu_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajemen Slider';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'slider_id',
            'slider_image',
            'slider_title',
            'slider_h1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

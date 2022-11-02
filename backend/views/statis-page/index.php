<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatisPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Halaman Statis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statis-page-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_page',
            'nama_page',
            'url_page:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

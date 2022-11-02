<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurveiIkmDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Survei Ikm Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-ikm-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Survei Ikm Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'id_ikm',
            'kode_survei',
            'kode_survei_detail',
            'nilai_survei_detail',
            //'create_at',
            //'update_at',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

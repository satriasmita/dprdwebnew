<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurveiDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail IKM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-detail-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_survei_detail',
            // 'kode_survei',
            [
                'attribute'=>'kode_survei',
                'label'=>'Nama Survei',
                'value'=>function($model){
                    return $model->katSurvei ? $model->katSurvei->nama_survei: '-';
                }
            ],
            'nama_survei_detail',
            'jenis_input',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

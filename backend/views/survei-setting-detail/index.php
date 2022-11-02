<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurveiSettingDetailmasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'IKM Setting Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-setting-detail-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_survei',
            // 'kode_survei',
            [
                'attribute'=>'kode_survei',
                'label'=>'Nama Survei',
                'value'=>function($model){
                    return $model->katSurvei ? $model->katSurvei->nama_survei: '-';
                }
            ],
            // 'kode_survei_detail',

            [
                'attribute'=>'kode_survei_detail',
                'label'=>'Pertanyaan',
                'value'=>function($model){
                    return $model->detailSurvei ? $model->detailSurvei->nama_survei_detail: '-';
                }
            ],
            'nama_settingsurveidetail',
            'nilai_surveidetail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

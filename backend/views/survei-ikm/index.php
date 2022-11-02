<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurveiIkmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indeks Kepuasan Masyarakat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survei-ikm-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_ikm',
            'nama_surveyer',
            'umur_surveyer',
            'alamat_surveyer',
            'pedidikan',
            'pekerjaan',
            //'create_at',
            //'update_at',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

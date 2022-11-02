<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AtributPuskesmasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atribut Puskesmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atribut-puskesmas-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_atribut',
            'jenis_atribut',
            'nama_atribut',
            'dekripsi_atribut:ntext',
            'gambar_atribut',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

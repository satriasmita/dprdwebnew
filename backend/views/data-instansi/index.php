<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataInstansiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Instansi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-instansi-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_upt',
            'alamat_upt:ntext',
            'telp',
            'no_wa',
            'email:email',
            'website',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

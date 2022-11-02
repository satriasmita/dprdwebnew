<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriFraksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Fraksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-fraksi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kategori Fraksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fraksi_kategori_id',
            'fraksi_kat',
            'fraksi_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

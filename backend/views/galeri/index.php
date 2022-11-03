<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GaleriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Galeri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'galeri_id',
            'galeri_title',
            'galeri_image',
            'galeri_desc:ntext',
            'galeri_date',
            //'galeri_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

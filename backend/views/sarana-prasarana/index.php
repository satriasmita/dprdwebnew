<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SaranaPrasaranaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sarana Prasarana Puskesmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sarana-prasarana-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_sarana',
            'nama_sarana',
            'deskripsi',
            // 'gambar_sarana',
            [
                'attribute'=>'gambar_sarana',
                'format'=>'html',
                'label'=>'Gambar Sarana',
                'value' => function ($model){
                    $root_folder = Yii::getAlias('@root');
                    $gambar = Html::img($root_folder.$model->gambar_sarana,['height'=>80]);
                    return $gambar;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

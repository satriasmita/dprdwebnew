<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MediaSocialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Media Social';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-social-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'sosmed_id',
            // 'sosmed_icon',
            [
                'attribute' => 'sosmed_icon',
                'format'=>'html', 
                'label'=>'Icon Sosial Media',
                // 'contentOptions' => ['style' => 'width:8%; white-space: normal;'],
                'value'=>function($model){
                    $icon =$model->sosmed_icon;
                    if ($icon == 1) {
                       $gambar = '<i class="fa fa-facebook-official" aria-hidden="true"></i>';
                    } elseif ($icon == 2) {
                        $gambar = '<i class="fa fa-instagram" aria-hidden="true"></i>';
                    } elseif ($icon == 3 ) {
                        $gambar = '<i class="fa fa-twitter-square" aria-hidden="true"></i>';
                    } elseif ($icon == 4 ) {
                        $gambar = '<i class="fa fa-envelope" aria-hidden="true"></i>';
                    } elseif ($icon == 5 ) {
                        $gambar = '<i class="fa fa-envelope-open-o" aria-hidden="true"></i>';
                    } elseif ($icon == 6 ) {
                        $gambar = '<i class="fa fa-wordpress" aria-hidden="true"></i>';
                    }
                    return $gambar;
                },
            ],
            'sosmed_url:url',
            'sosmed_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

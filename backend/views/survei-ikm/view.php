<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SurveiIkm */

$this->title = $model->id_ikm;
$this->params['breadcrumbs'][] = ['label' => 'Survei Ikms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="survei-ikm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ikm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ikm], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ikm',
            'nama_surveyer',
            'umur_surveyer',
            'alamat_surveyer',
            'pedidikan',
            'pekerjaan',
            'create_at',
            'update_at',
            'create_by',
            'update_by',
        ],
    ]) ?>

</div>

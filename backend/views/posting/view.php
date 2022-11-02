<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Posting */

$this->title = $model->posting_judul;
$this->params['breadcrumbs'][] = ['label' => 'Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$root_folder = Yii::getAlias('@root');
?>

<div class="col-md-4">
    <div class="box box-primary">
        <div class="box-body box-profile">
            <?= Html::img($root_folder.$model->posting_icon,['class'=>'profile-user-img img-responsive img-circle']); ?>
            <h3 class="profile-username text-center">Icon Posting</h3>
        </div>
    </div>
    
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Informasi Postingan</h3>
        </div>

        <div class="box-body">
            <strong><i class="fa fa-pencil margin-r-5"></i> Dibuat Oleh </strong>
            <p class="text-muted"><?= $model->authorCreate->profile->full_name; ?></p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Dibuat Pada</strong>
            <p class="text-muted"><?= $model->create_at; ?> </p>

            <hr>

            <strong><i class="fa fa-gear margin-r-5"></i> Aksi</strong>

            <p>
                <?= Html::a('<i class="fa fa-pencil"></i> Update', ['update', 'id' => $model->posting_id], ['class' => 'btn btn-primary btn-xs']) ?>
                <?= Html::a('<i class="fa fa-trash"></i> Delete', ['delete', 'id' => $model->posting_id], [
                    'class' => 'btn btn-danger btn-xs',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
                <?= Html::a('<i class="fa fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
                <?= Html::a('<i class="fa fa-angle-double-left"></i> Kembali', ['index'], ['class' => 'btn btn-warning btn-xs']) ?>
            </p>

            <hr>
        </div>
    </div>
</div>

<div class="col-md-8">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Detail Posting</h3>
        </div>
        <div class="box-body">
            <div class="row margin-bottom">
                <center><?= Html::img($root_folder.$model->posting_image_utama,['class'=>'img-fluid','style'=>'max-height:384px;min-height:360px;width:auto']); ?></center>
            </div>
            <hr>
            <p align="justify"><?php echo $model->posting_deskripsi; ?></p>
        </div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mstpegawai */

$this->title = $model->NIP;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mstpegawais'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mstpegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->NIP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->NIP], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NIP',
            'NAMA',
            'GLRDEPAN',
            'GLRBELAKANG',
            'KDJENKEL',
            'TEMPATLHR',
            'KDKAB',
            'TGLLHR',
            'AGAMA',
            'KDDIDIK',
            'TMTCAPEG',
            'TMTPNS',
            'KDSTAWIN',
            'KDSTAPEG',
            'TMTSTOP',
            'KDPANGKAT',
            'KDESELON',
            'KDSTRUKTURAL',
            'TMTJABATANS',
            'KDFUNGSI',
            'TMTJABATAN',
            'KDFUNGSIUMUM',
            'TMTJABATANFU',
            'KDGURU',
            'KDSSBP',
            'KDSKPD',
            'KDSATKER',
            'BIDANGF',
            'SUBF',
            'ALAMAT',
            'NOTELP',
            'NOKTP',
            'NPWP',
            'NIPLAMA',
            'CATATAN',
            'NOKARPEG',
            'KARISKARSU',
            'STATUSAKTIF',
            'NAMAIBU',
            'STATUS',
            'PASSWORD',
            'FOTO',
            'LEMARI',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Mstpegawai;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MstpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Pegawai');
$this->params['breadcrumbs'][] = $this->title;


?>


<div class="mstpegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                //'attribute' => 'Foto',
                'label'=>'Foto',
                'format'=>'raw',
                'format'=>'html', //klo ada koding html kita harus kasih format ini
                'value'=>function($model){
                    $tombolUplaod = Html::a('Upload Foto', ['upload-foto','pegawai_nip'=>$model->NIP], ['class' => 'btn mb-3 btn-success']) ;
                     $foto = $model->fotoPegawai ? $model->fotoPegawai->lokasi_image : '-';
                    $root_folder = Yii::getAlias('@root');
                    $foto_gambar = Html::img($root_folder.$foto,['height'=>80]);
                    return $foto_gambar.'<br>'.$tombolUplaod; //dah
                }
            ],
            'NIP',
            // 'NAMA',
            [
                'attribute' => 'NAMA',
                'label'=>'NAMA PEGAWAI',
                'format'=>'html', //klo ada koding html kita harus kasih format ini
                'value'=>function($model){
                    return $model->GLRDEPAN.' '.$model->NAMA.', '.$model->GLRBELAKANG;
                }
            ],

            
            // 
            // 'KDJENKEL',
            //'TEMPATLHR',
            //'KDKAB',
            //'TGLLHR',
            //'AGAMA',
            //'KDDIDIK','GLRDEPAN',
            // 'GLRBELAKANG',
            //'TMTCAPEG',
            //'TMTPNS',
            //'KDSTAWIN',
            //'KDSTAPEG',
            //'TMTSTOP',
            'KDPANGKAT',
            'KDESELON',
            // 'KDSTRUKTURAL',
            [
                'attribute' => 'KDSTRUKTURAL',
                'label'=>'STRUKTURAL',
                'format'=>'html', //klo ada koding html kita harus kasih format ini
                'value'=>function($model){
                    $kode_struk =$model->struktural ? $model->struktural->NMSTRUKTURAL : '-';
                    return $kode_struk;
                }
            ],
            // 'TMTJABATANS',
            //'KDFUNGSI',
            //'TMTJABATAN',
            //'KDFUNGSIUMUM',
            //'TMTJABATANFU',
            //'KDGURU',
            //'KDSSBP',
            // 'KDSKPD',
            [
                'attribute' => 'KDSKPD',
                'label'=>'SKPD',
                'format'=>'html', 
                'value'=>function($model){
                    $kode_skpd =$model->namaSkpd ? $model->namaSkpd->NMSKPD : '-';
                    return $kode_skpd;
                }
            ],
            // 'KDSATKER',
             [
                'attribute' => 'KDSATKER',
                'label'=>'SATKER',
                'format'=>'html', 
                'value'=>function($model){
                    $kode_satker =$model->satker ? $model->satker->NMSATKER : '-';
                    return $kode_satker;
                }
            ],
            // 'BIDANGF',
            [
                'attribute' => 'BIDANGF',
                'label'=>'BIDANG',
                'format'=>'html', 
                'value'=>function($model){
                    $kode_bidang =$model->bidang ? $model->bidang->NMBIDANG : '-';
                    return $kode_bidang;
                }
            ],


            //'SUBF',
            //'ALAMAT',
            //'NOTELP',
            //'NOKTP',
            //'NPWP',
            //'NIPLAMA',
            //'CATATAN',
            //'NOKARPEG',
            //'KARISKARSU',
            'STATUSAKTIF',
            //'NAMAIBU',
            //'STATUS',
            //'PASSWORD',
            //'FOTO',
            //'LEMARI',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi',
                'template' => '{view}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

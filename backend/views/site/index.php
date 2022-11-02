<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\DataOpd;
use backend\models\Setting;
use backend\models\Mstpegawai;
use backend\models\Pegawainonpns;
use backend\models\SkpdTbl;


$imgPath = Yii::getAlias('@root').'/images';
$imgPathfront = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

// $getprofilopd = DataOpd::find()-> one();
// $opd_upt = $getprofilopd->nama_opd;

// $skpd = (new Setting)->find()->where(['nama_setting'=>'SKPD'])->one();
// $KDSKPD = $skpd->nilai_setting;
// $getSkpd = (new SkpdTbl)->find()->where(['KDSKPD'=>$KDSKPD])->one();

// $nama_web = $getSkpd ? $getSkpd->NMSKPD : 'Nama SKPD Tidak Ada';




$this->title =  'DASHBOARD WEBSITE DPRD KOTA PARIAMAN';
?>

<h1>Selamat Datang</h1>



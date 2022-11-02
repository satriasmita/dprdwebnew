<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\KategoriFraksi;

/* @var $this yii\web\View */

$this->title = 'Fraksi';
?>
<section class="who-we-are">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 wow fadeInLeft animated">
            <!-- <h2 class="text-uppercase small-line text">Alasan <span class="text-theme-color">Memilih Kami</span></h2> -->
            <!-- <h4 class="mt20 mb20 text-theme-color">Mitra Keluarga Mandiri Menuju Pariaman Sehat</h4> -->
            <!-- <p>Puskesmas Marunggi Sudah terakreditasi, Pelayanan sesuai Standar, Petugas ramah, pelayanan cepat dan berada dekat dengan lingkungan masyarakat. Dan memiliki sarana dan prasarana yang menunjang.</p> -->
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-user-md pb20"></i>
                  <!-- <h5><a href="#">Tenaga Kesehatan yang Profesional </a></h5> -->
                  <!-- <p>Tenaga kami pendidikannya minimal D3 kesehatan dan memiliki STR sesuai dengan Kompetensi</p> -->
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-handshake-o pb20"></i>
                  <!-- <h5><a href="#">Pelayanan Cepat dan Responsif</a></h5> -->
                  <!-- <p>Pengaduan Masyarakat cepat ditanggapi dan di tindak lanjuti.</p> -->
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-street-view pb20"></i>
                  <!-- <h5><a href="#">Ruangan Tindakan yang Nyaman</a></h5> -->
                  <!-- <p>Semua ruangan memiliki AC dan ruangan tunggu</p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeInRight animated">
            <h3 class="text-uppercase small-line mb20">Kategori <span class="text-theme-color"> Fraksi</span></h3>
            <div class="latest-project">
              <ul class="hours_wigdet">
              <?php
                            $listKatfraksi= KategoriFraksi::find()->where(['fraksi_status' => 1])->all();
                            foreach ($listKatfraksi as $value) : ?> 
                         <li style="line-height: 20px;" ><a href="<?= Url::to(['/fraksi/kategori-fraksi','id'=>$value->fraksi_kategori_id])?>"><?= $value->fraksi_kat ?></a></li>

                            <?php endforeach; ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
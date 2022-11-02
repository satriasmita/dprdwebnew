<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Agenda;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>



<!-- Section: who-we-are & Latest Project -->
  <section class="who-we-are">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 wow fadeInLeft animated">
            <h2 class="text-uppercase small-line text">SEJARAH <span class="text-theme-color">DPRD KOTA PARIAMAN</span></h2>
            <h4 class="mt20 mb20 text-theme-color">DPRD Kota Pariaman periode 2014-2019 terdiri atas 9 fraksi, dengan jumlah anggota 106 orang.</h4>
            <p>Berdasarkan Ordonantie pembentukan sebagaimana termuat dalam Staatsblad 1926 Nomor 366 dan berlaku tanggal 1 Oktober 1926, Gemeente Batavia telah ditunjuk menjadi Stadsgemeente Batavia dan menyelenggarakan pemerintahan daerahnya menurut SGO. Keanggotaan Gemeenteraad Stadsgemeente sama dgn pada masa Gemeente Batavia, demikian pula mengenai jumlahnya. Pada zaman Jepang, sistem pemerintahan daerah pada waktu itu semula tidak terdapat Dewan-Dewan.</p>
            <!-- <div class="row">
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-user-md pb20"></i>
                  <h5><a href="#">Tenaga Kesehatan yang Profesional </a></h5>
                  <p>Tenaga kami pendidikannya minimal D3 kesehatan dan memiliki STR sesuai dengan Kompetensi</p>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-handshake-o pb20"></i>
                  <h5><a href="#">Pelayanan Cepat dan Responsif</a></h5>
                  <p>Pengaduan Masyarakat cepat ditanggapi dan di tindak lanjuti.</p>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="service-item"> <i class="fa fa-street-view pb20"></i>
                  <h5><a href="#">Ruangan Tindakan yang Nyaman</a></h5>
                  <p>Semua ruangan memiliki AC dan ruangan tunggu</p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="col-md-4 wow fadeInRight animated">
            <h3 class="text-uppercase small-line mb20">Agenda <span class="text-theme-color"> Kegiatan</span></h3>
            <div class="latest-project">
                
                <!-- <-?php 
                        $age = (new Agenda)->getDetailAgenda(); 
                        foreach ($age as $row) 
                    ?>
              <ul class="hours_wigdet">
                <li>Waktu : <=?= $row->agenda_waktu; ?></li>
                <li>Pukul : <=?= $row->agenda_pukul; ?></li>
                <li>Tempat : ?= $row->agenda_tempat; ?></li>
                <li>Detail Acara : ?= $row->agenda_penjelasan; ?></li> -->

              </ul>
              
            <?php  ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
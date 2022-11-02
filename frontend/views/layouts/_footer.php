<?php 

use yii\helpers\Url;
use yii\helpers\Html;

use backend\models\Menu;
use backend\models\Posting;
use backend\models\DataInstansi;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>
<!--Main Footer-->
  <footer class="main-footer">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-1"> 
            <!-- <img src="images/logo/logo.png" alt=""> -->
            <center><?= Html::img($imgPath.'/rsz_1logo_pariaman.png',['alt'=>'logo']); ?>
            <h4>DPRD KOTA</h4></center>
           <!--  <ul class="social">
              <li><a href="#"><span>follow us :</span></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul> -->
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-2">
            <h4>Berita Terbaru</h4>
            <?php  
                  $beritaopd = (new Posting)->getBeritaFooter(); 
                  foreach ($beritaopd as $row) {

            ?>
            <p><?= $row->posting_judul ?></p>
            <?php  } ?>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-3">

            <!-- ?php 
                $instansi = DataInstansi::find()->one();
            ?>
            <h4>Hubungi Kami</h4>
            <p><span>Alamat :</span> <br>
              ?= $instansi->alamat_upt ?></p>
            <p><span>Telpon :</span> <br>
              ?= $instansi->telp ?></p>
            <p><span>Email :</span> <br>
              ?= $instansi->email ?>  </p> -->
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-4">
            <h4>Galeri</h4>
            <div class="flickr-feed clearfix">
              <ul>
                 <?php  
                      $foto = (new Posting)->getDataGaleri(); 
                      foreach ($foto as $row) {

                ?>
                <!-- <li> <a href="images/flicker/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/1.jpg" alt=""></a> </li> -->
                <li>
                  <?= Html::img($root_folder.$row->posting_image_utama,['class'=>'lightbox-image','style'=>'max-height:50px;min-height:50px;width:auto']); ?>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Copyright--><div class="copyright">&copy; 2020 Copyrights <a href="https://diskominfo.pariamankota.go.id" target="_blank"> Dinas Komunikasi dan Informatika Kota Pariaman </div>
  </footer>
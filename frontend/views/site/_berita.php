<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>

<!--Gallery Style One-->
  <section class="gallery-one overlayer default-overlay parallax" data-bg-image="images/bg/bg1.jpg">
    <div class="container pbn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h6 style="color: #fff">Puskesmas Kp Baru Padusunan</h6>
            <h2 class="text-white"><span> GALERI</span> KAMI</h2>
            <p class="text-white">Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid ptn">
      <div class="row clearfix">
        <div class="carousel-col-5">
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h1.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h1.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h2.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h2.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h3.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h3.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h4.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h4.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <!--Image Box-->
              <figure class="image-box"><img src="images/gallery/h5.jpg" alt="" class="img-responsive"></figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> <a href="images/gallery/h5.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                    <h3>project title</h3>
                    <p>Scaping, renovation</p>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
        </div>
      </div>
    </div>
  </section>
 <!--Gallery Style One-->
  <section class="gallery-one overlayer default-overlay parallax" data-bg-image="images/bg/bg1.jpg">
    <div class="container pbn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h6 style="#fff">DINAS KOMUNIKASI DAN INFORMATIKA KOTA PARIAMAN787</h6>
            <h2 class="text-white">BERITA SEPUTAR PEMERINTAHAN <span><br>KOTA PARIAMAN</span></h2>
            <p class="text-white"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid ptn">
      <div class="row clearfix">
        <div class="carousel-col-5">
            <?php 
                $beritaopd = (new Posting)->getDataUntukBerita(); 
                foreach ($beritaopd as $row) {
            ?>
          <div class="default-gallery-item item">
            <div class="inner-box"> 
              <figure class="image-box">
                <?php // echo Html::img($root_folder.$row->posting_image_utama,['width'=>50,'height'=>300],['alt'=>'']); ?>
                <?= Html::img($root_folder.$row->posting_image_utama,['style'=>'max-height:300px;min-height:300px;width:auto']); ?>
              </figure>
              <!--Overlay Box-->
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content"> 
                    
                    <h4><?= $row->posting_judul ?></h4>
                    <!-- <p>Dibuat oleh: <?php // echo $row->authorCreate->username; ?> </p> -->
                    <p>Posting <?php echo $row->create_at; ?> </p>
                    <?= Html::a('Baca Selengkapnya', ['detail-berita', 'posting_id' => $row->posting_id], ['class' => 'btn theme-btn mt10 text-lowercase']) ?>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Gallery Item--> 
          </div>
            <?php } ?>
          
          
         
          
        </div>
      </div>
    </div>
  </section>
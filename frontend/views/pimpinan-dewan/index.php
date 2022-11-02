<?php 

use yii\helpers\Url;
use yii\helpers\Html;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
$this->title = 'Pimpinan Dewan';

?>

<!-- Section: Team -->
  <section class="team">
    <div class="container ptn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-6">
            <h6>PIMPINAN DEWAN</h6>
            <h2><span>DPRD KOTA PARIAMAN</span></h2>
          </div>
          <div class="col-md-6">
            <p>Berikut Pimpinan Dewan DPRD di Lingkungan Kota Pariaman</p>
          </div>
        </div>
      </div>
      <div class="section_wrap">
        <div class="row">
          <div class="carousel-col-3">
          <?php foreach ($allPimpinan as $pd) { 
              
              ?>
            <div class="team-item item">
              <div class="team-img"> 
              <img class="img-responsive" src="<?php echo Url::to('@web/public/images/Dewan/'. $pd->pimpinan_image)?>" alt="">

                
              </div>
              <div class="img-title">
                <h4><?= $pd->pimpinan_nama ?></h4>
                <p><?= $pd->pimpinan_jabatan ?></p>
              
                <a style="padding: 5px;" href="<?= Url::to(['/pimpinan-dewan/baca']) ?>?id=<?= $pd->pimpinan_id?>" class="outline-btn">Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>

              </div>

              <div class="team-icon">
                <ul>
                  <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
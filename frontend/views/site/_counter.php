<?php 

use yii\helpers\Url;
use yii\helpers\Html;

// use backend\models\Menu;
use backend\models\MenuManagemen;

$imgPath = Yii::getAlias('@root').'/resource/frontend_themes';

?>

<!-- Section: FunFact -->
  <section class="fact-counter style-two overlayer default-overlay text-center parallax" data-bg-image="<?= $imgPath.'/images/bg/medical_info.JPG'; ?>">
    
    <div class="container">
      <div class="row fun-fact">
        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn">
          <div class="cs-counter-col">
            <div class="cs-number-count"> <i class="icon flaticon-mortarboard"></i>
              <div class="count-outer"><span class="counter count count-text" data-count="6572"></span></div>
              <div class="text">
                <h3 style="color: #ffffff">Jumlah Penduduk</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn">
          <div class="cs-counter-col">
            <div class="cs-number-count"> <i class="icon flaticon-mortarboard"></i>
              <div class="count-outer"><span class="counter count count-text" data-count="1714"></span></div>
              <div class="text">
                <h3 style="color: #ffffff">Rata-rata Kunjungan</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn">
          <div class="cs-counter-col">
            <div class="cs-number-count"> <i class="icon flaticon-mortarboard"></i>
              <div class="count-outer"><span class="counter count count-text" data-count="8165"></span></div>
              <div class="text">
                <h3 style="color: #ffffff">Kepersertaan BPJS</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn">
          <div class="cs-counter-col">
            <div class="cs-number-count"> <i class="icon flaticon-mortarboard"></i>
              <div class="count-outer"><span class="counter count count-text" data-count=""></span></div>
              <div class="text">
                <h3 style="color: #ffffff">IKM</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end fun-fact --> 
    </div>
  </section>
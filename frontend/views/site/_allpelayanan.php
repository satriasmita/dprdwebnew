<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$this->title = 'Pelayanan Dinas Kesehatan';
$root_folder = Yii::getAlias('@root');

 ?>
<!-- inner Section -->
    <section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2>Layanan Diskominfo Kota Pariaman</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="our-department">
        <div class="container">
            <div class="section-wrap">
                <div class="row">
                    <?php 
                        $pelayananopd = (new Posting)->getDataPelayanan();

                        foreach ($pelayananopd as $row) {
                    ?>
                        <div class="col-md-3">
                            <div class="service-box style-1" style="background-image:url(images/service/1.jpg);">
                                <div class="service-box-overlay"></div>
                               
                                <i><?= Html::img($root_folder.$row->posting_icon,['style'=>'max-height:50px;min-height:50px;width:auto']); ?></i>
                                <div class="service-box-content">
                                  <h5><a href="#"><?= $row->posting_judul ?></a></h5>
                                  <!-- <a href="#">Read More</a> -->
                                </div><!-- service-box-content -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>  
        </div>  
    </section>

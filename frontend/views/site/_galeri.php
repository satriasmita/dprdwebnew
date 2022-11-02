<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
$imgPath2 = Yii::getAlias('@root').'/resource/frontend_themes';

?>

<!--Gallery Style One-->
<section class="gallery-one overlayer default-overlay parallax" data-bg-image="<?= $imgPath2.'/images/bg/bd_dprd.JPG'; ?>">
    <div class="container pbn">
        <div class="section-title">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h6 style="color: #fff">DPRD KOTA PARIAMAN</h6>
                    <h2 class="text-white"><span> GALERI</span> KAMI</h2>
                    <p class="text-white">Dokumentas terbaik kami DPRD Kota Pariaman dari berbagai kegiatan yang berguna bagi masyarakat secara keseluruhan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ptn">
        <div class="row clearfix">
            <div class="carousel-col-5">
                <?php 
                    $galeri = (new Posting)->getDataGaleri(); 
                    foreach ($galeri as $row) {
                ?>
                    <div class="default-gallery-item item">
                        <div class="inner-box"> 
                            <figure class="image-box"><img src="<?= $root_folder.$row->posting_image_utama; ?>" alt="" class="img-responsive", style="max-height:150px;min-height:200px;width:auto"></figure>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content"> <a href="<?= $root_folder.$row->posting_image_utama; ?>" class="lightbox-image image-link" title="Image Caption Here"><span class="icon icon-Search"></span></a>
                                        <h3><?= $row->posting_judul ?></h3>
                                        <p>Dibuat oleh: <?= $row->create_by ?></p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

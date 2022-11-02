<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\SaranaPrasarana;

// $imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
  $imgPath = Yii::getAlias('@root').'/resource/frontend_themes';

  $this->title = 'Sarana Prasarana Puskemas';

?>

<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <h2>Sarana Prasarana Puskemas</h2>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="who-we-are">
    <div class="container">
        <div class="section-content">
            <div class="row">

                <?php 
                    $saranapra = SaranaPrasarana::find()->all();
                    foreach ($saranapra as $row) {
                ?>
                    <div class="col-md-4 wow fadeInRight animated">
                        <h3 class="text-uppercase small-line mb20"><span class="text-theme-color"> </span></h3>
                        <div class="department-item">
                            <div class="thumb"> 
                                <img class="img-responsive" src="<?= $root_folder.$row->gambar_sarana ?>" style="max-height:400px;min-height:400px;width:auto">
                                <div class="department-title">
                                    <h4 class="text-uppercase"><?= $row->nama_sarana ?></h4>
                                    <div class="department-dtls">
                                        <p><?= $row->deskripsi ?></p>
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

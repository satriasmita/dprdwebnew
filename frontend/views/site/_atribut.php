<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\AtributPuskesmas;

// $imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
  $imgPath = Yii::getAlias('@root').'/resource/frontend_themes';

  $this->title = 'Atribut Puskemas';

?>

<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <h2>Atribut Puskemas</h2>
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
                    $dataAtribut = AtributPuskesmas::find()->all();
                    foreach ($dataAtribut as $row) {
                ?>
                    <div class="col-md-4 wow fadeInRight animated">
                        <h3 class="text-uppercase small-line mb20"><span class="text-theme-color"> </span></h3>
                        <div class="department-item">
                            <div class="thumb"> 
                                <img class="img-responsive" src="<?= $root_folder.$row->gambar_atribut ?>" style="max-height:370px;min-height:400px;width:auto">
                                <div class="department-title">
                                    <h4 class="text-uppercase"><?= $row->nama_atribut ?></h4>
                                    <h6><?= $row->jenis_atribut ?></h6>
                                    <div class="department-dtls">
                                        <p><?= $row->dekripsi_atribut ?></p>
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

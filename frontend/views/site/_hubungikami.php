<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\DataInstansi;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

$this->title = 'HUBUNGI KAMI';

?>

<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <h2>Hubungi Kami</h2>
                    <!-- <p>Home. Contact</p> -->
                </div>
            </div>
        </div>
    </div>
</section> 

<br><br><br> 

<?php 
    $instansi = DataInstansi::find()->one();
?>


<section class="call-to-action-boxed pb50">
    <div class="container-fluid pn">
        <div class="clearfix">
            <div class="call-to-action-corner col-md-4" style="background-image: url(<?= $imgPath.'/images/call-to-action/1.jpg'; ?>);">
               <!--  <section class="fact-counter style-two overlayer default-overlay text-center parallax" data-bg-image="<?php // echo $imgPath.'/images/bg/medical_info.JPG'; ?>"> -->

                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="icofont icofont-location-pin"></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>ALAMAT</h3>
                        <p><?= $instansi->alamat_upt ?></p>
                    </div>
                </div>
            </div>
            <div class="call-to-action-center col-md-4 pt50 pb50" style="background-image: url(images/call-to-action/2.jpg);">
                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="icofont icofont-bed-patient"></i></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Telpon dan Whatsapp</h3>
                        <ul>
                            <li><span>Telpon</span> <span><?= $instansi->telp ?></span></li>
                            <li><span>Whatsapp</span> <span><?= $instansi->no_wa ?></span></li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="#" class="btn theme-btn" style="color: #ffffff">Chat Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="call-to-action-corner col-md-4" style="background-image: url(images/call-to-action/3.jpg);">
                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="icofont icofont-web"></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Web-mail</h3>
                        <p><?= $instansi->email ?></p>
                        <p><?= $instansi->website ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
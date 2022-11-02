<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Mstpegawai;
use backend\models\Setting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
$this->title = "Pegawai OPD";
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>
<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-10"> -->
                <div class="inner-title">
                    <h2>Daftar Pegawai</h2>
                </div>
            <!-- </div> -->
            
        </div>
    </div>
</section> 

<br><br>
<div class="section-title">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6>DISKOMINFO KOTA PARIAMAN</h6>
      <h2>PEGAWAI<span> DISKOMINFO KOTA PARIAMAN</span></h2>
      <p>Sed malesuada nunc sit amet quam hendrerit, mollis vulputate risus tristique. Quisque dapibus eros et dolor accumsan, sit amet interdum tortor imperdiet.</p>
    </div>
</div>
<hr>

<div class="container-fluid">
    <div class="row">
      <?php 
            $getSkpd = Setting::find()->where(['nama_setting'=>'SKPD'])->one();
              $kodeSkpd = $getSkpd->nilai_setting;

              $getSatker = Setting::find()->where(['nama_setting'=>'Satker'])->one();
              $kodeSatker = $getSatker->nilai_setting;

              $getBidang = Setting::find()->where(['nama_setting'=>'Bidang'])->one();
              $kodeBidang = json_decode($getBidang->nilai_setting);

          $pegawai = (new Mstpegawai)->getAllDataPegawai($kodeSkpd,$kodeSatker,$kodeBidang); 
          foreach ($pegawai as $row) {
              $foto = $row->fotoPegawai ? $row->fotoPegawai->lokasi_image : '';
              $foto_gambar = $root_folder.$foto;
              $jeniskelamin = $row->KDJENKEL;
          ?>
      
      <div class="col-sm-6 col-md-3">
         <div class="iq-card">
            <div class="iq-card-body text-center">
               <div class="doc-profile">
                  <!-- <img class="rounded-circle img-fluid avatar-80" src="images/user/12.jpg" alt="profile"> -->
                  <?php 
                    if (!empty($foto)) {
                      echo Html::img($foto_gambar,['class'=>'rounded-circle img-fluid avatar-80']);
                    } else {
                      if ($jeniskelamin==1) {
                          // echo Html::img($imgPath.'/man.png',['class'=>'img-fullwidth img-responsive'],['style'=>'max-height:100px;min-height:150px;width:auto']); 
                          echo Html::img($imgPath.'/businessman.png',['class'=>'rounded-circle img-fluid avatar-80']); 
                      } elseif ($jeniskelamin==2) {
                          // echo Html::img($imgPath.'/woman.png',['class'=>'img-fullwidth img-responsive'],['style'=>'max-height:100px;min-height:150px;width:auto']); 
                          echo Html::img($imgPath.'/muslim.png',['class'=>'rounded-circle img-fluid avatar-80']); 
                      }

                    }
                ?>
               </div>
               <div class="iq-doc-info mt-3">
                  <h4><?= $row->GLRDEPAN.' '.$row->NAMA.' '.$row->GLRBELAKANG ?></h4>
                  <p class="mb-0" ><?= 'NIP. '.$row->NIP ?></p>
                  <h6><?= $row->bidang->NMBIDANG ?></h6>
               </div>
               <!-- <div class="iq-doc-description mt-2">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
               </div> -->
               <div class="iq-doc-social-info mt-3 mb-3">
                  <ul class="m-0 p-0 list-inline">
                     <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                     <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                     <li><a href="#"><i class="ri-google-fill"></i></a></li>
                  </ul>
               </div>
               <!-- <a href="profile.html" class="btn btn-primary">View Profile</a> -->
            </div>
         </div>
      </div>

      <?php } ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
     
      
   </div>
</div>



 

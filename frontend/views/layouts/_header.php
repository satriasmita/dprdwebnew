<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\MenuManagemen;

// use backend\models\Menu;
use backend\models\KategoriFraksi;

$imgPath = Yii::getAlias('@root').'/images';

?>
<!-- Main Header / Style One-->
<header class="main-header header-style-one" > 
  <!-- Header Top -->
  <div class="header-top">
    <div class="container clearfix ptn pbn"> 
      <!--Top Left-->
      <div class="top-left pull-left">
        <ul class="info-nav clearfix">
          <li> 
            <!--Social Links-->
            <div class="social-links pull-left"> <span class="text-theme-color">Follow Kami</span> : <a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> </div>
          </li>
          <!-- <li><a href="mailto:yourmail@gmail.com"><span class="icon icon-Mail mr10"></span>Opening Hours</a></li> -->
        </ul>
      </div>
      <!--Top Right-->
      <div class="top-right pull-right clearfix"> 
        <!--Lang Bar-->
        <ul class="info-nav clearfix">
          <li><?= Html::a('Login',['/public/site/index'],['class' => 'text-uppercase appoinment','data-pjax' => 0, 'target' => '_blank']) ?></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Header Top End --> 
  
  <!--Header-Main Box-->
  <div class="header-mainbox">
    <div class="container ptn pbn">
      <div class="clearfix">
        <div class="pull-left">
          <div class="logo">
            <!-- ?= Html::img($imgPath.'/dprd.png',['title'=>'DPRD KOTA PARIAMAN'],['alt'=>'DPRD KOTA PARIAMAN']); ?> -->
          </div>
          
        </div>
        <div class="outer-box clearfix"> 
          <!-- Main Menu -->
          <nav class="main-menu logo-outer">
            <div class="navbar-header"> 
              <!-- Toggle Button -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse clearfix">

              <ul class="navigation clearfix">
              <li ><a style="font-weight: 550; font-size: 16px;" href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
              <!-- <li ><a style="font-weight: 550; font-size: 16px;" href="?= Url::to(['//']) ?>">Sejarah</a></li> -->
              <li ><a style="font-weight: 550; font-size: 16px;" href="<?= Url::to(['/fraksi/']) ?>">Fraksi</a></li>
              <li ><a style="font-weight: 550; font-size: 16px;" href="<?= Url::to(['/berita/']) ?>">Berita</a></li>
              <li ><a style="font-weight: 550; font-size: 16px;" href="<?= Url::to(['/komisi/']) ?>">Komisi</a></li>
              <li ><a style="font-weight: 550; font-size: 16px;" href="<?= Url::to(['/badan/']) ?>">Badan</a></li>



            
             </ul>
            

           </div>
         </nav>
       </div>
     </div>
   </div>
 </div>
</header>

<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Slider;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
?>
<!-- start of hero -->
  <section class="hero hero-slider-wrapper">
    <div class="hero-slider">
      <?php 
        $slide = (new Slider)->getDataSlider();
        // print_r($slide);
        foreach ($slide as $row) { 
      ?>
      <div class="slide"> 
          <?php echo Html::img($root_folder.$row->slider_image); ?>
          <div class="title"> <span> <?php echo $row->slider_title; ?></span>
            <h1><?php echo $row->slider_h1;  ?></h1>
          </div>
      </div>

    <?php } ?>
    </div>
  </section>
  <!-- end hero slider --> 
<?php 

use yii\helpers\Url;
use yii\helpers\Html;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
$this->title = 'Detail Fraksi';

?>

 <!-- inner Section -->
    <section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2>FRAKSI DPRD KOTA PARIAMAN</h2>
                        <p>Home. Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  

  <!--Blog Section-->
  <section class="blog">
      <div class="container">

        <div class="section-content">
            <div class="row">
            <?php foreach ($allFraksi as $fr) { 
              
            ?>


                    <div class="col-xxs-12 col-sm-12 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                       
                        <article class="post clearfix">
                        <div class="blog-effect"> 
                        
                            <a href="#"><figure> 
                                <!-- <img class="img-responsive" src="images/blog/1.jpg" alt=""> -->
                                <!-- ?= Html::img($root_folder.$row->posting_image_utama,['style'=>'max-height:200px;min-height:200px;width:auto']); ?> -->
                                <img class="img-responsive" style="width: 250px; height: 150px"src="<?php echo Url::to('@web/public/images/Fraksi/'. $fr->fraksi_image)?>" alt="">
                            
                            </figure> 
                            </a> 
                        </div>
                            <div class="post-body"> 
                              <div class="post-info">
                                <!-- ?= $news->tglIndo(date('Y-m-d',strtotime($news->berita_tanggal))).' '.date('H:i',strtotime($news->berita_tanggal)) ; ?> -->
                                <a href="#"><span class="icon icon-Pen"></span> 
                                <!-- ?= $news->berita_tanggal; ?></a>  -->
                                <!-- ?= $row->authorCreate->username; ?></a>  -->
                              </div>
                              <h4 ><?= $fr->fraksi_nama ?></h4>
                                    <a style="padding: 5px;" href="<?= Url::to(['/fraksi/baca']) ?>?id=<?= $fr->fraksi_id?>" class="outline-btn">Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
                            
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
          
        </div>
      </div>
  </section>

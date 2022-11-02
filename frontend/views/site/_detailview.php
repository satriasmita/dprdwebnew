<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$root_folder = Yii::getAlias('@root');
$this->title = $model->posting_judul;
$authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>
<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <h2><?= $model->posting_judul ?></h2>
                    <!-- <h5><p>DINAS KESEHATAN KOTA PARIAMAN</p></h5> -->
                </div>
            </div>
            
        </div>
    </div>
</section> 

<section class="inner-blog-single">
    <div class="section-content">
       <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <article class="post">
                        <div class="">
                            <a href="#">
                              <center><?= Html::img($root_folder.$model->posting_image_utama,['class'=>'img-responsive']); ?></center>
                            </a>
                          <div class="post-body">
                            <h2><span><?= $model->posting_judul ?></span></h2>
                            <p class="mt15"><?= $model->posting_deskripsi ?></p>
                          </div>
                        </div>
                        
                        <div class="row">
                            <div class="post-share-options">
                                <div class="social-posts mt40 mb60 pull-right">
                                    <strong>Share :</strong>
                                    <a href="#" class=""><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="social-icon"><span class="fa fa-google-plus"></span></a>
                                    <a href="#" class="social-icon"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div> 
            </div>
        </div>
    </div>
</section>

<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

$this->title = $categoryPosting->nama_kategori;

?>

 <!-- inner Section -->
    <section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2><?= $categoryPosting->nama_kategori?></h2>
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
                <?php 
                    
                    foreach ($model as $row) {
                        // $author = ($row->authorCreate and $row->authorCreate->profile) ? $row->authorCreate->profile->full_name :'by author';
                ?>
                    <div class="col-xxs-12 col-sm-12 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                       
                        <article class="post clearfix">
                        <div class="blog-effect"> 
                            <a href="#"><figure> 
                                <!-- <img class="img-responsive" src="images/blog/1.jpg" alt=""> -->
                                <?= Html::img($root_folder.$row->posting_image_utama,['style'=>'max-height:200px;min-height:200px;width:auto']); ?>
                            </figure> 
                            </a> 
                        </div>
                            <div class="post-body"> 
                              <div class="post-info">
                                <?= $row->tglIndo(date('Y-m-d',strtotime($row->create_at))).' '.date('H:i',strtotime($row->create_at)) ; ?>
                                <a href="#"><span class="icon icon-Pen"></span> 
                                <?= $row->authorCreate->username; ?></a> 
                              </div>
                              <h4 class="post-title" style="max-height:80px;min-height:80px"><?= $row->posting_judul ?></h4>
                              <!-- <a href="blog-single.html" class="btn theme-btn mt10">Read more</a> -->
                              <?= Html::a('Baca Selengkapnya', ['view-post', 'id_post' => $row->posting_id], ['class' => 'btn theme-btn mt10']) ?>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
          
        </div>
      </div>
  </section>

<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>
<!--Blog Section-->
  <section class="blog">
    <div class="container">
      <div class="section-title">
        <div class="row">
          <div class="col-md-6">
            <h6>Diskominfo Kota Pariaman</h6>
            <h2><span>Pengumuman</span></h2>
          </div>
          <!-- <div class="col-md-6">
            <p>Pengumuman terkait Dinas Kesehatan dapat dilihat pada t</p>
          </div> -->
        </div>
      </div>
      <div class="section-content">
        <div class="row">
            <?php 
                $annount = (new Posting)->getFrontendPengumuman();

                foreach ($annount as $row) {
            ?>
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> <a href="#">
                <figure><!--  <img class="img-responsive" src="images/blog/1.jpg" alt=""> -->
                    <?= Html::img($root_folder.$row->posting_image_utama,['class'=>'img-responsive','style'=>'max-height:200px;min-height:200px;width:auto']); ?>
                </figure>
                </a> </div>
              <div class="post-body">
                <div class="post-info"> 
                  <?= $row->tglIndo(date('Y-m-d',strtotime($row->create_at))).' '.date('H:i',strtotime($row->create_at)) ; ?>
                  <!-- <a href="#"><span class="icon icon-Message"></span> 10 Comments</a>  -->
                  <a href="#"> - <span class="icon icon-Pen"></span> <?= $row->authorCreate->username; ?></a> 
                </div>
                <h3 class="post-title"><?= $row->posting_judul ?></h3>
                <!-- <a href="blog-single.html" class="btn theme-btn mt10">Read more</a>  -->
                <?= Html::a('Selengkapnya', ['detail-pengumuman', 'posting_id' => $row->posting_id], ['class' => 'btn theme-btn mt10']) ?>
              </div>
            </article>

          </div>
          <?php 
                        }
                    ?>
        </div>
      </div>
    </div>
  </section>
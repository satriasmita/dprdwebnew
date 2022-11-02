<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$this->title = $model->berita_judul;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>

<!-- inner Section -->
    <section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2><?= $model->berita_judul; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>  


  <!-- 1st-section -->
       <section class="inner-blog-single">
           <div class="section-content">
               <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <article class="post">
                                <div class="">
                                    <a href="#">
                                      <!-- <img class="img-responsive" src="images/blog/b1.jpg" alt=""> -->
                                      <!-- ?= Html::img($root_folder.$model->berita_foto,['class'=>'img-responsive']); ?> -->
                                        <img class="img-responsive" style="width: 250px; height: 150px"src="<?php echo Url::to('@web/public/images/Berita/'. $model->berita_foto)?>" alt="">
                                    </a>
                                    <div class="post-body">
                                        <div class="post-info mt20">
                                            <?= $model->tanggalIndo(date('Y-m-d',strtotime($model->berita_tanggal))).' '.date('H:i',strtotime($model->berita_tanggal)) ; ?>
                                            <a href="#"> - <span class="icon icon-Pen"></span> 
                                                <!-- ?= $model->authorCreate->username; ?> -->
                                            </a>
                                        </div>

                                        <h3 class="post-title"><?= $model->berita_judul; ?></h3>
                                        <p><?= $model->berita_isi ; ?></p>

                                     </div>
                                </div>
                                
                            </article>
                        </div>
                       <div class="col-md-4">
                            <div class="sidebar">
                                <!-- Popular Posts -->
                                <div class="sidebar-widget popular-posts">
                                    <div class="sidebar-title"><h2>Daftar <span class="text-theme-color">Berita</span></h2></div>
                                    <?php 
                                        $beritaopd = (new Posting)->getDataUntukBerita(); 
                                        foreach ($beritaopd as $row) {
                                    ?>
                                        <article class="post">
                                            <figure class="post-thumb"><a href="#">
                                                <!-- <img class="" src="images/blog/s1.jpg" alt=""></a> -->
                                                <?= Html::img($root_folder.$row->berita_foto,['class'=>'']); ?>
                                            </figure>
                                            <h4><a href="#"><?= $model->berita_judul; ?></a></h4>
                                            <div class="post-info">
                                                <?= $row->tglIndo(date('Y-m-d',strtotime($row->create_at))).' '.date('H:i',strtotime($row->create_at)) ; ?>
                                            </div>
                                        </article>
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                </div>
                                
                                
                                <!-- Archives -->
                                <div class="sidebar-widget archives-widget">
                                    <div class="sidebar-title"><h2>Archives <span class="text-theme-color">Widget</span> </h2></div>
                                    
                                    <ul class="archives-list">
                                        <li><a href="#" class="clearfix"><span class="pull-left">September 2016</span> <span class="pull-right">(25)</span></a></li>
                                        <li><a href="#" class="clearfix"><span class="pull-left">August 2016</span> <span class="pull-right">(18)</span></a></li>
                                        <li><a href="#" class="clearfix"><span class="pull-left">July 2016</span> <span class="pull-right">(72)</span></a></li>
                                        <li><a href="#" class="clearfix"><span class="pull-left">June 2016</span> <span class="pull-right">(33)</span></a></li>
                                        <li><a href="#" class="clearfix"><span class="pull-left">May 2016</span> <span class="pull-right">(12)</span></a></li>
                                        <li><a href="#" class="clearfix"><span class="pull-left">April 2016</span> <span class="pull-right">(81)</span></a></li>
                                    </ul>
                                    
                                </div>
                                
                                <!-- Popular Tags -->
                                <div class="sidebar-widget popular-tags">
                                    <div class="sidebar-title"><h2>Tag <span class="text-theme-color">Widget</span> </h2></div>
                                    
                                    <a href="#">Education</a>
                                    <a href="#">Crisis</a>
                                    <a href="#">Water</a>
                                    <a href="#">Business</a>
                                    <a href="#">Giving</a>
                                    <a href="#">Children</a>
                                </div> 
                            </div>
                       </div> 
                    </div>
                </div>
            </div>
       </section>


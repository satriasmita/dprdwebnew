<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>

<section class="blog" style="background: #f9f9f9">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-md-4">
                    <h6>Puskesmas Marunggi</h6>
                    <h2><span>Artikel</span> Kami</h2>
                </div>
                <div class="col-md-7">
                    <p>Informasi Kesehatan Terkini , Terupdate , mudah dimengerti, Simple, dan Akurat</p>
                </div>
            </div>
        </div>
        
        <div class="section-content">
            <div class="row">
                <?php 
                        $blog = (new Posting)->getDataBlog(); 
                        foreach ($blog as $row) {
                    ?>
                    <div class="col-xxs-12 col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <article class="post clearfix">
                            <div class="blog-effect"> <a href="#">
                            <figure> <img class="img-responsive" src="<?= $root_folder.$row->posting_image_utama; ?>" style="max-height:241px;min-height:241px;width:auto"></figure>
                            </a> </div>
                            <div class="post-body">
                                <div class="post-info"> 
                                    <?= $row->tglIndo(date('Y-m-d',strtotime($row->create_at))).' '.date('H:i',strtotime($row->create_at)) ; ?> 
                                    <a href="#"> - <span class="icon icon-Pen"></span> <?= $row->authorCreate->username; ?></a> </div>
                                <h3 class="post-title"><?= $row->posting_judul ?></h3>
                            <?= Html::a('Selengkapnya', ['detail-blog', 'posting_id' => $row->posting_id], ['class' => 'btn theme-btn mt10']) ?>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
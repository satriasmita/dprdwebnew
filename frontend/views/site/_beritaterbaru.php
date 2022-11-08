<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Posting;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>

<br>
<br>
<br>

<section class="team">
    <div class="container ptn">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6">
                    <h6>DPRD KOTA PARIAMAN</h6>
                    <h2><span>Berita Terbaru</span></h2>
                </div>
                <div class="col-md-6">
                    <p> Dewan Perwakilan Rakyat Daerah Kota Pariaman adalah lembaga legislatif unikameral yang berkedudukan di Kota Pariaman, provinsi Sumatra Barat. DPRD Kota Pariaman memiliki 20 orang anggota yang tersebar di 9 partai politik
                    </p>
                </div>
            </div>
        </div>

        <div class="section-content">
        <div class="row">
        <?php 
                $beritaopd = (new Posting)->getDataUntukBerita(); 
                foreach ($beritaopd as $row) {
            ?>
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> 
              <?= Html::img($root_folder.$row->posting_image_utama,['style'=>'max-height:200px;min-height:200px;width:auto']); ?>

                </figure>
                </a> 
              </div>
              <div class="post-body">
                <div class="post-info"> 
                <h4><?= $row->posting_judul ?></h4>

                </div>
                <p>Posting <?php echo $row->create_at; ?> </p>
                <?= Html::a('Baca Selengkapnya', ['detail-berita', 'posting_id' => $row->posting_id], ['class' => 'btn theme-btn mt10 text-lowercase']) ?>

              </div>
            </article>

          </div>
          <?php 
                        }
                    ?>
    </div>
</section>
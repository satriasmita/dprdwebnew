<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Berita;

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
                    <p>Dalam memberikan Pelayanan Kami selalu menerapkan Protokol kesehatan. Masyarakat Sehat adalah masyarakat yang membudidayakan Hidup Bersih dan menerapkan Pola Hidup Seimbang.
</p>
                </div>
            </div>
        </div>

        <div class="section-content">
        <div class="row">
            <?php 
                $beritadprd = (new Berita)->getDataNews();

                foreach ($beritadprd as $row) {
            ?>
          <div class="col-sm-6 col-md-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <article class="post clearfix">
              <div class="blog-effect"> 
              <img class="img-responsive" style="width: 250px; height: 150px"src="<?php echo Url::to('@web/public/images/Berita/'. $row->berita_foto)?>" alt="">

                </figure>
                </a> </div>
              <div class="post-body">
                <div class="post-info"> 
                <?= $row->berita_tanggal; ?></a> 

                </div>
                <h4 class="post-title"><?= $row->berita_judul ?></h4>
                <?= Html::a('Baca Selengkapnya', ['view-post', 'id_post' => $row->berita_id], ['class' => 'btn theme-btn mt10']) ?>

              </div>
            </article>

          </div>
          <?php 
                        }
                    ?>
    </div>
</section>
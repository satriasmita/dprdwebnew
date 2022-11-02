 <?php 

   use yii\helpers\Url;
  use yii\helpers\Html;
   use backend\models\Posting;

  $root_folder = Yii::getAlias('@root');

 ?>

 <!-- Section: Our Departments -->
  <section class="our-department">
    <div class="container ptn">
      <div class="section-title">
        <div class="row">
          <div class="col-md-4">
            <h6>Puskesmas Marunggi </h6>
            <h2><span>Layanan</span>  <span> Kami</span></h2>
          </div>
          <div class="col-md-7">
            <p>Puskesmas Marunggi mempunyai tenaga yang masih muda , energik, dan ramah melayani sesuai kompetensi, dengan pelayanan sesuai standar permenkes 4 tahun 2019.</p>
          </div>
        </div>
      </div>
      <div class="section-wrap">
            <div class="row">
                <div class="carousel-col-4">
                    <?php 
                          $depa = (new Posting)->getDepartemen(); 
                          // print_r($apl);
                          foreach ($depa as $row) {
                      ?>
                    
                        <div class="col-md-10 col-sm-10">
                            <div class="service-item effect-border"> <i><?= Html::img($root_folder.$row->posting_icon,['class'=>'img-responsive','style'=>'max-height:75px;min-height:75px;width:auto;margin-left:auto;margin-right: auto; ']); ?>
                            </i>

                            <!-- <div class="service-item effect-border"> <i class="flaticon-drugs"></i> -->
                                <h5><a href="#"><?= $row->posting_judul; ?> </a></h5> <br>
                                <p><?php echo substr(strip_tags($row->posting_deskripsi),0,100).'...' ?></p>
                                <?php // echo Html::a('Menuju Link', $row->id  , ['class' => 'btn theme-btn mt10 text-lowercase']) ?>
                                <?= Html::a('Selengkapnya', ['detail-posting', 'posting_id' => $row->posting_id]) ?>
                            </div>
                        </div>

                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
  </section>

  
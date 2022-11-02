<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\UnggahFile;

$root_folder = Yii::getAlias('@root');
$this->title = 'Download Dokumen';
// $authorCreate =   ($model->authorCreate) ? $model->authorCreate->username : '-';
?>
<section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <h2>Download Dokumen</h2>
                </div>
            </div>
            
        </div>
    </div>
</section>

<br><br>

<section class="who-we-are">
    <div class="container ptn">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="appointment-head">
                        <h3 class="text-uppercase">UNGGAHAN DOKUMEN KAMI</h3>
                        <h5 class="text-uppercase">PUSKESMAS MARUNGGI KOTA PARIAMAN</h5>
                    </div>
                    <div class="appointment-form p30">
                        <div class="frm-register"> 
                            <table class="table table-bordered">
                                <thead>
                                  <tr class="table-primary">
                                    <th>No.</th>
                                    <th>Jenis Unggahan</th>
                                    <th>Nama Unggahan</th>
                                    <th>Unggahan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                     <?php 
                                            $no=1;
                                          $file = (new UnggahFile)->getListUnggah(); 
                                          foreach ($file as $row) {
                                      ?>

                                        <tr>
                                            <td class="table-info"><?= $no++ ?></td>
                                            <td class="table-info"><?php 
                                                    if ($row->jenis_unggah==1) {
                                                        echo "Dokumen";
                                                    } elseif ($row->jenis_unggah==2) {
                                                        echo "Aplikasi";
                                                    }
                                                ?>
                                            </td>
                                            <td class="table-info"><?= $row->nama_unggah ?></td>
                                            <td class="table-info">
                                                <?php
                                                    if ($row->jenis_unggah==1) {
                                                        echo Html::a('<i class="fa fa-download" aria-hidden="true"></i> Download', Url::to('@root'.$row->lokasi_unggah),['target'=>'_blank'],['class' => 'btn mb-3 btn-success']);
                                                    } elseif ($row->jenis_unggah==2) {
                                                        echo Html::a('<i class="fa fa-download" aria-hidden="true"></i> Menuju Link', Url::to($row->alamat_url),['target'=>'_blank'],['class' => 'btn mb-3 btn-primary']);
                                                    }
                                                ?>
                                                
                                                    
                                                </td>
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




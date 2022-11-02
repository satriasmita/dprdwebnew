<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Badan;

$this->title = 'Badan Seputar DPRD Kota Pariaman';

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');
$badan = Badan::find()->where(['badan_id' => $id])->one();


?>

<!-- inner Section -->
    <section class="overlay overlay-green parallax" data-bg-image="images/bg/bg1.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2><?= $badan->badan_nama?></h2>
                        <p>BADAN</p>
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
                                        <img class="img-responsive" style="width: 200px; height: 150px"src="<?php echo Url::to('@web/public/images/Badan/'. $badan->badan_image)?>" alt="">
                                      
                                    </a>
                                    <div class="post-body">
                                        <div class="post-info mt20">
                                            <a href="#"> - <span class="icon icon-Pen"></span> 
                                                <?= $badan->kategoriBadan->badan_kategori?>
                                            </a>
                                        </div>

                                     </div>

                                     <table width="100%" border="0">
                                        <tr>
                                            <td>
                                                <div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; "> Tempat / Tanggal Lahir </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div style="font-size: 15px; text-align: justify; "><?= $badan->badan_ttl ; ?> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; "> Agama </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <div style="font-size: 15px; text-align: justify; "><?= $badan->badan_agama == 1 ? 'Islam' : ($badan->badan_agama == 2 ? 'Protestan' : ($badan->badan_agama == 3 ? 'Katolik' :  ($badan->badan_agama == 4 ? 'Hindu' : ($badan->badan_agama == 5 ? 'Budha' : ($badan->badan_agama == 6 ? 'Konghuchu' : '')))))?> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="26%">
                                                <div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; "> Suami / Istri </div>
                                            </td>
                                            <td width="1%">&nbsp;</td>
                                            <td width="73%">
                                                <div style="font-size: 15px; text-align: justify; "><?= $badan->badan_suamiistri ; ?> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="26%">
                                                <div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; "> Anak </div>
                                            </td>
                                            <td width="1%">&nbsp;</td>
                                            <td width="73%">
                                                <div style="font-size: 15px; text-align: justify; "> <?= $badan->badan_anak ; ?> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="26%">
                                                <div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; "> Alamat </div>
                                            </td>
                                            <td width="1%">&nbsp;</td>
                                            <td width="73%">
                                                <div style="font-size: 15px; text-align: justify; "><?= $badan->badan_alamat ?> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="26%">
                                                <div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; "> Pengalaman Organisasi </div>
                                            </td>
                                            <td width="1%">&nbsp;</td>
                                            <td width="73%">
                                                <div style="font-size: 15px; text-align: justify; "><?= $badan->badan_pengalaman_organisasi ; ?> </div>
                                            </td>
                                        </tr>


                                     </table>




                                </div>
                                
                            </article>
                        </div>
                       <div class="col-md-4">
                       
                            </div>
                       </div> 
                    </div>
                </div>
            </div>
       </section>


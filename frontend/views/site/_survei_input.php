<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use backend\models\SurveiSettingDetail;
    use backend\models\SurveiDetail;

    $this->title = 'Indeks Kepuasan Masyarakat'; 
?>

<br><br>

<section class="who-we-are">
    <div class="container ptn">
      <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                <div class="appointment-head">
                    <h3 class="text-uppercase">SURVEI INDEKS KEPUASAN MASYARAKAT</h3>
                    <h5 class="text-uppercase">PUSKESMAS KP.BARU PADUSUNAN</h5>
                </div>
                <div class="appointment-form p30">
                    <div class="frm-register">
                        <?php $form = ActiveForm::begin(); ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <?= $form->field($model, 'nama_surveyer')->textInput(['readonly' => true]) ?>
                                </div>
                                <div class="col-md-3">
                                    <?= $form->field($model, 'umur_surveyer')->textInput(['readonly' => true]) ?>
                                </div>
                                <div class="col-md-5">
                                    <?= $form->field($model, 'alamat_surveyer')->textInput(['readonly' => true]) ?>
                                </div>

                                <hr>

                                <div class="col-md-12">
                                    
                                
                                    <?php
                                    $no=1;
                                    foreach ($detail as $i=>$row) { 

                                        echo $form->field($row, "[{$i}]id_ikm")->hiddenInput()->label(false); 

                                        $datanilai_surveidetail=ArrayHelper::map(SurveiSettingDetail::find()
                                            ->where(['kode_survei_detail'=>$row->kode_survei_detail])
                                            ->all(),'nilai_surveidetail','nama_settingsurveidetail');

                                        $checkkatsurveidetail=SurveiDetail::find()
                                                ->where(['kode_survei_detail'=>$row->kode_survei_detail])
                                                ->one();

                                        $jenisinput=$checkkatsurveidetail->jenis_input;

                                        //echo $jenisinput;
                                        if($jenisinput=='radiolist'){
                                            echo $form->field($row, "[{$i}]nilai_survei_detail")->radioList($datanilai_surveidetail)->label($no.'. '.$checkkatsurveidetail->nama_survei_detail);
                                        }else if ($jenisinput=='textbox'){
                                             echo $form->field($row, "[{$i}]nilai_survei_detail")->textInput()->label($checkkatsurveidetail->nama_survei_detail);
                                        }

                                        $no++;

                                    } ?>
                                </div>
                                
                                    <div class="form-group">
                                        <?= Html::submitButton('Simpan', ['class' => 'p10']) ?>
                                    </div>


                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

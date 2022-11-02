<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use backend\models\DataInstansi;

    $this->title = 'Indeks Kepuasan Masyarakat'; 

    $instansi = DataInstansi::find()->one();
?>

<br><br>

<section class="who-we-are">
    <div class="container ptn">
      <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                <div class="appointment-head">
                    <h3 class="text-uppercase">SURVEI INDEKS KEPUASAN MASYARAKAT</h3>
                    <h5 class="text-uppercase"><?= $instansi->nama_upt ?> PEMERINTAHAN KOTA PARIAMAN</h5>
                </div>
                <div class="appointment-form p30">
                    <div class="frm-register">
                        <?php $form = ActiveForm::begin(); ?>

                            <div class="row">
                                <div class="col-sm-5">
                                    <?= $form->field($model, 'nama_surveyer')->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($model, 'umur_surveyer')->textInput() ?>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model, 'pedidikan')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-7">
                                    <?= $form->field($model, 'alamat_surveyer')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Isi Indeks Kepuasan Masyarakat', ['class' => 'p10']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

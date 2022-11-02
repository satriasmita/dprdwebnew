<?php

namespace backend\controllers;

use Yii;
use backend\models\Mstpegawai;
use backend\models\Setting;
use backend\models\MstpegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Pegawaifoto;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * MstpegawaiController implements the CRUD actions for Mstpegawai model.
 */
class MstpegawaiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mstpegawai models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new MstpegawaiSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     $dataProvider->query->andWhere(['KDSKPD' => 'O29', 'KDSATKER' => 'O29', ])->andWhere(['STATUSAKTIF'=>'AKTIF']);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);

    // }

    public function actionIndex()
    {
        $searchModel = new MstpegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        $getSkpd = Setting::find()->where(['nama_setting'=>'SKPD'])->one();
        $kodeSkpd = $getSkpd->nilai_setting;

        $getSatker = Setting::find()->where(['nama_setting'=>'Satker'])->one();
        $kodeSatker = $getSatker->nilai_setting;

        $getBidang = Setting::find()->where(['nama_setting'=>'Bidang'])->one();
        $kodeBidang = json_decode($getBidang->nilai_setting);

        $dataProvider->query->andWhere(['KDSKPD' => $kodeSkpd, 'KDSATKER' => $kodeSatker])
                            ->andWhere(['STATUSAKTIF'=>'AKTIF'])
                            ->andWhere(['IN','BIDANGF',$kodeBidang]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionUploadFoto($pegawai_nip)
    {
        //cek dlu apakah sudah ada data pegawai di tabel photo, jika ada maka update, jika tidak baru new
        $cekDataPhoto = Pegawaifoto::find()->where(['pegawai_nip'=>$pegawai_nip])->one(); 
        if(!empty($cekDataPhoto)){
            $model = $cekDataPhoto; //jadi klo dah ada datnya kita ga create baru lgi di tabel photo, dia akan update aja
        }else{ //ni klo data foto nya kosong baru di create baru
            $model = new Pegawaifoto();
            $model->pegawai_nip = $pegawai_nip; //ni buat set di form uploadnya sesua nip dari tombol
        }

        
        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan
 
            if (!empty(UploadedFile::getInstance($model, 'upload_foto'))) {

                $model->upload_foto = UploadedFile::getInstance($model, 'upload_foto');

                $fileName = $model->pegawai_nip.'.'.$model->upload_foto->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/fotopegawai');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath); //ini yg bkin folder hoooo...okeh bg baru tau

                if ($model->upload_foto->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/fotopegawai');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->lokasi_image = $locationUrl.'/' .$fileName;
                    $model->save(false);

                } 

            }

            return  $this->redirect('index');
        }

        return $this->render('_form_foto', [
            'model' => $model,
        ]);

    }



    /**
     * Displays a single Mstpegawai model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mstpegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mstpegawai();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->NIP]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mstpegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->NIP]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mstpegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mstpegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Mstpegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mstpegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

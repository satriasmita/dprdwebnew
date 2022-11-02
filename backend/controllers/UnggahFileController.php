<?php

namespace backend\controllers;

use Yii;
use backend\models\UnggahFile;
use backend\models\UnggahFileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * UnggahFileController implements the CRUD actions for UnggahFile model.
 */
class UnggahFileController extends Controller
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
     * Lists all UnggahFile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UnggahFileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UnggahFile model.
     * @param integer $id
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
     * Creates a new UnggahFile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UnggahFile();

        $model->unggah_oleh =Yii::$app->User->id;
        $model->tanggal_unggah = date('Y-m-d');

        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan

            if (!empty(UploadedFile::getInstance($model, 'upload_file'))) {

                $model->upload_file = UploadedFile::getInstance($model, 'upload_file');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_file->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/filepdf');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->upload_file->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/filepdf');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->lokasi_unggah = $locationUrl.'/' .$fileName;

                } 

            }

            if ($model->save(false)) {
                return $this->redirect(['index']);
            }

        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id_unggah]);
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UnggahFile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_unggah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UnggahFile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UnggahFile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UnggahFile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UnggahFile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

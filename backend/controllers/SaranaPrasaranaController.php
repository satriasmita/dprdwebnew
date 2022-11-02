<?php

namespace backend\controllers;

use Yii;
use backend\models\SaranaPrasarana;
use backend\models\SaranaPrasaranaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * SaranaPrasaranaController implements the CRUD actions for SaranaPrasarana model.
 */
class SaranaPrasaranaController extends Controller
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
     * Lists all SaranaPrasarana models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SaranaPrasaranaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SaranaPrasarana model.
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
     * Creates a new SaranaPrasarana model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SaranaPrasarana();

        if ($model->load(Yii::$app->request->post())) {

            if (!empty(UploadedFile::getInstance($model, 'upload_image_sarana'))) {

                $model->upload_image_sarana = UploadedFile::getInstance($model, 'upload_image_sarana');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_image_sarana->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/sarana');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath); 

                if ($model->upload_image_sarana->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/sarana');

                    $model->gambar_sarana = $locationUrl.'/' .$fileName;

                } 

            } 
            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SaranaPrasarana model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            if (!empty(UploadedFile::getInstance($model, 'upload_image_sarana'))) {

                $model->upload_image_sarana = UploadedFile::getInstance($model, 'upload_image_sarana');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_image_sarana->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/sarana');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath); 

                if ($model->upload_image_sarana->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/sarana');

                    $model->gambar_Sarana = $locationUrl.'/' .$fileName;

                } 

            } 
            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SaranaPrasarana model.
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
     * Finds the SaranaPrasarana model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SaranaPrasarana the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SaranaPrasarana::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

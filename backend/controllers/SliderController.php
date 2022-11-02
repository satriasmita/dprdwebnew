<?php

namespace backend\controllers;

use Yii;
use backend\models\Slider;
use backend\models\SliderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * SliderController implements the CRUD actions for Slider model.
 */
class SliderController extends Controller
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
     * Lists all Slider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Slider model.
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
     * Creates a new Slider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Slider();

        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan

            if (!empty(UploadedFile::getInstance($model, 'slider_upload'))) {

                $model->slider_upload = UploadedFile::getInstance($model, 'slider_upload');

                $fileName = md5(date('Ymdhis')).'.'.$model->slider_upload->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/slider');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->slider_upload->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/slider');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->slider_image = $locationUrl.'/' .$fileName;

                } 

            }

            if ($model->save(false)) {
                return $this->redirect(['index']);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->slider_id]);
        // }

        
    }

    /**
     * Updates an existing Slider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan

            if (!empty(UploadedFile::getInstance($model, 'slider_upload'))) {

                $model->slider_upload = UploadedFile::getInstance($model, 'slider_upload');

                $fileName = md5(date('Ymdhis')).'.'.$model->slider_upload->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/slider');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->slider_upload->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/slider');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->slider_image = $locationUrl.'/' .$fileName;

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
     * Deletes an existing Slider model.
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
     * Finds the Slider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Slider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Slider::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

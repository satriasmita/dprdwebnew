<?php

namespace backend\controllers;

use Yii;
use backend\models\AtributPuskesmas;
use backend\models\AtributPuskesmasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * AtributPuskesmasController implements the CRUD actions for AtributPuskesmas model.
 */
class AtributPuskesmasController extends Controller
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
     * Lists all AtributPuskesmas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AtributPuskesmasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AtributPuskesmas model.
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
     * Creates a new AtributPuskesmas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        $model = new AtributPuskesmas();

        if ($model->load(Yii::$app->request->post())) {

            if (!empty(UploadedFile::getInstance($model, 'upload_atribut'))) {

                $model->upload_atribut = UploadedFile::getInstance($model, 'upload_atribut');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_atribut->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/atribut');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath); 

                if ($model->upload_atribut->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/atribut');

                    $model->gambar_atribut = $locationUrl.'/' .$fileName;

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
     * Updates an existing AtributPuskesmas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_atribut]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate()
    {
        $model = new AtributPuskesmas();

        if ($model->load(Yii::$app->request->post())) {

            if (!empty(UploadedFile::getInstance($model, 'upload_atribut'))) {

                $model->upload_atribut = UploadedFile::getInstance($model, 'upload_atribut');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_atribut->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/atribut');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath); 

                if ($model->upload_atribut->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/atribut');

                    $model->gambar_atribut = $locationUrl.'/' .$fileName;

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
     * Deletes an existing AtributPuskesmas model.
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
     * Finds the AtributPuskesmas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AtributPuskesmas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AtributPuskesmas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

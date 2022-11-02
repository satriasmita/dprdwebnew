<?php

namespace backend\controllers;

use Yii;
use backend\models\Posting;
use backend\models\PostingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * PostingController implements the CRUD actions for Posting model.
 */
class PostingController extends Controller
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
                    'detail-view',
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

            'browse-images' => [
                'class' => 'bajadev\ckeditor\actions\BrowseAction',
                //'url' => '@browseimage/contents/',
                'url' => Yii::$app->urlManagerFrontEnd->baseUrl.'/uploads/posting/content/',
                'path' => '@uploads/posting/content/',
            ],
            'upload-images' => [
                'class' => 'bajadev\ckeditor\actions\UploadAction',
                //'url' => '@browseimage/contents/',
                'url' => Yii::$app->urlManagerFrontEnd->baseUrl.'/uploads/posting/content/',
                'path' => '@uploads/posting/content/',
            ],
        ];


            
     
    }

    /**
     * Lists all Posting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Posting model.
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
     * Creates a new Posting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Posting();

        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan

            $model->create_by =Yii::$app->User->id;
            $model->create_at = date('Y-m-d H:i:s');
            $model->trans_ip = Yii::$app->getRequest()->getUserIP();

            if (!empty(UploadedFile::getInstance($model, 'upload_icon'))) {

                $model->upload_icon = UploadedFile::getInstance($model, 'upload_icon');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_icon->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/posting/icon');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath); //ini yg bkin folder hoooo...okeh bg baru tau

                if ($model->upload_icon->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/posting/icon');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->posting_icon = $locationUrl.'/' .$fileName;

                } 

            } 

            if (!empty(UploadedFile::getInstance($model, 'upload_image_utama'))) {

                $model->upload_image_utama = UploadedFile::getInstance($model, 'upload_image_utama');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_image_utama->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/posting/image_utama');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->upload_image_utama->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/posting/image_utama');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->posting_image_utama = $locationUrl.'/' .$fileName;

                } 

            } 

            //cuma kasih if doan susah amat ...wkwkw..tolongin aja..ga usah ngomel2 hahahhaa..awasssssssssssssssssssssssss


            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->posting_id]);
                
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Posting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {//ketika ditekan tombol simpan
            
            $model->update_by = Yii::$app->User->id;
            $model->update_at = date('Y-m-d H:i:s');
            $model->trans_ip = Yii::$app->getRequest()->getUserIP();

            if (!empty(UploadedFile::getInstance($model, 'upload_icon'))) {

                $model->upload_icon = UploadedFile::getInstance($model, 'upload_icon');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_icon->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/posting/icon');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath); //ini yg bkin folder hoooo...okeh bg baru tau

                if ($model->upload_icon->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/posting/icon');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->posting_icon = $locationUrl.'/' .$fileName;

                } 

            } 

            if (!empty(UploadedFile::getInstance($model, 'upload_image_utama'))) {

                $model->upload_image_utama = UploadedFile::getInstance($model, 'upload_image_utama');

                $fileName = md5(date('Ymdhis')).'.'.$model->upload_image_utama->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/posting/image_utama');
                print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->upload_image_utama->saveAs($locationPath.'/' .$fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/posting/image_utama');//jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->posting_image_utama = $locationUrl.'/' .$fileName;

                } 

            } 

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->posting_id]);
            }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Posting model.
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
     * Finds the Posting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Posting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Posting::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}

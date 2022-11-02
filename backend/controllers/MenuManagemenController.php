<?php

namespace backend\controllers;

use Yii;
use backend\models\MenuManagemen;
use backend\models\MenuManagemenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\PostingKategori;
use backend\models\Posting;
use backend\models\StatisPage;

/**
 * MenuManagemenController implements the CRUD actions for MenuManagemen model.
 */
class MenuManagemenController extends Controller
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
     * Lists all MenuManagemen models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuManagemenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MenuManagemen model.
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
     * Creates a new MenuManagemen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MenuManagemen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MenuManagemen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MenuManagemen model.
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
     * Finds the MenuManagemen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MenuManagemen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MenuManagemen::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionListMenu($menu_type)
    {
        if ($menu_type=='category') {
            $listdata=PostingKategori::find();
            if($listdata->count()>0){
                $data=$listdata->orderBy('id_kategori')->all();
                echo "<option value=''>--semua</option>";
                foreach ($data as $key) {
                    echo "<option value='".$key->id_kategori."'>".$key->nama_kategori."</option>";    

                }

            }else{
               echo "<option value=''>--data kategori kosong</option>"; 
            }
        } elseif ($menu_type=='post') {
            $listdata=Posting::find()->where(['posting_status'=>1]);
            if($listdata->count()>0){
                $data=$listdata->orderBy('posting_id')->all();
                echo "<option value=''>--semua</option>";
                foreach ($data as $key) {
                    echo "<option value='".$key->posting_id."'>".$key->posting_judul."</option>";    

                }

            }else{
               echo "<option value=''>--data posting kosong</option>"; 
            }
        } elseif ($menu_type=='statis_page') {
            $listdata=StatisPage::find();
            if($listdata->count()>0){
                $data=$listdata->orderBy('id_page')->all();
                echo "<option value=''>--semua</option>";
                foreach ($data as $key) {
                    echo "<option value='".$key->id_page."'>".$key->nama_page."</option>";    

                }

            }else{
               echo "<option value=''>--data statis page kosong</option>"; 
            }
        }

    }
}

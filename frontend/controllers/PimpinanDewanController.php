<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PimpinanDewan;
use frontend\models\PimpinanDewanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * PimpinanDewanController implements the CRUD actions for PimpinanDewan model.
 */
class PimpinanDewanController extends Controller
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
     * Lists all PimpinanDewan models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new PimpinanDewanSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {

        $pimpinan = PimpinanDewan::find()->where('pimpinan_id');
        $pagepimpinan = new Pagination(['totalCount' => $pimpinan->count(), 'pageSize'=> 12]);
        $allPimpinan = $pimpinan->offset($pagepimpinan->offset)
                    ->limit($pagepimpinan->limit)
                    ->all();

        $listPimpinan = PimpinanDewan::find()->where('pimpinan_id')->limit(5)->all();

        return $this->render('index', [
            'allPimpinan' => $allPimpinan,
            'pagepimpinan' => $pagepimpinan,
            'listPimpinan' => $listPimpinan,
        ]);
    }

    public function actionBaca($id)
    {

        $dewan = PimpinanDewan::find()->where(['pimpinan_id' => $id
        ]);

        return $this->render('read-dewan', [
            'dewan' => $dewan,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single PimpinanDewan model.
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
     * Creates a new PimpinanDewan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PimpinanDewan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pimpinan_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PimpinanDewan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pimpinan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PimpinanDewan model.
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
     * Finds the PimpinanDewan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PimpinanDewan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PimpinanDewan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

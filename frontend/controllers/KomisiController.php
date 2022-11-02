<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Komisi;
use frontend\models\KomisiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * KomisiController implements the CRUD actions for Komisi model.
 */
class KomisiController extends Controller
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
     * Lists all Komisi models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new KomisiSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        // $allProduk = Produk::find()->where(['pro_status' => 1])->orderBy('pro_id DESC')->all();

        $komisi = Komisi::find()->where('komisi_id');
        $pagekomisi = new Pagination(['totalCount' => $komisi->count(), 'pageSize'=> 12]);
        $allKomisi = $komisi->offset($pagekomisi->offset)
                    ->limit($pagekomisi->limit)
                    ->all();

        $listKomisi = Komisi::find()->where('komisi_id')->limit(5)->all();

        return $this->render('index', [
            'allKomisi' => $allKomisi,
            'pagekomisi' => $pagekomisi,
            'listKomisi' => $listKomisi,
        ]);
    }

    public function actionBaca($id)
    {

        $komisi = Komisi::find()->where(['komisi_id' => $id
        ]);

        return $this->render('read-komisi', [
            'komisi' => $komisi,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Komisi model.
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
     * Creates a new Komisi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Komisi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->komisi_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Komisi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->komisi_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Komisi model.
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
     * Finds the Komisi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Komisi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Komisi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

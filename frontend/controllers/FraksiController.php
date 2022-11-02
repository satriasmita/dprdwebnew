<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Fraksi;
use frontend\models\FraksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * FraksiController implements the CRUD actions for Fraksi model.
 */
class FraksiController extends Controller
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
     * Lists all Fraksi models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new FraksiSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        // $allProduk = Produk::find()->where(['pro_status' => 1])->orderBy('pro_id DESC')->all();

        $fraksi = Fraksi::find()->where('fraksi_id');
        $pagefraksi = new Pagination(['totalCount' => $fraksi->count(), 'pageSize'=> 12]);
        $allFraksi = $fraksi->offset($pagefraksi->offset)
                    ->limit($pagefraksi->limit)
                    ->all();

        $listFraksi = Fraksi::find()->where('fraksi_id')->limit(5)->all();

        return $this->render('index', [
            'allFraksi' => $allFraksi,
            'pagefraksi' => $pagefraksi,
            'listFraksi' => $listFraksi,
        ]);
    }

    public function actionBaca($id)
    {

        $fraksi = Fraksi::find()->where(['fraksi_id' => $id
        ]);

        return $this->render('read-fraksi', [
            'fraksi' => $fraksi,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Fraksi model.
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
     * Creates a new Fraksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fraksi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->fraksi_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fraksi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->fraksi_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fraksi model.
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
     * Finds the Fraksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fraksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fraksi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

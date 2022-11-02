<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Setting;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                   [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        //'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    

    /**
     * Displays homepage.
     *
     * @return string
     */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    public function actionIndex()
    {
        $getSkpd = Setting::find()->where(['nama_setting'=>'SKPD'])->one();
        $kodeSkpd = $getSkpd->nilai_setting;

        $getSatker = Setting::find()->where(['nama_setting'=>'Satker'])->one();
        $kodeSatker = $getSatker->nilai_setting;

        $getBidang = Setting::find()->where(['nama_setting'=>'Bidang'])->one();
        $kodeBidang = json_decode($getBidang->nilai_setting);

        $getAlamat = (new Setting)->find()->where(['nama_setting'=>'Alamat'])->one();
        $alamat = $getAlamat->nilai_setting;

        $getEmail = (new Setting)->find()->where(['nama_setting'=>'e-mail'])->one();
        $email = $getEmail->nilai_setting;

        $getTanggal = (new Setting)->find()->where(['nama_setting'=>'Tanggal Berdiri'])->one();
        $tanggalberdiri = $getTanggal->nilai_setting;

        $getPimpinan = (new Setting)->find()->where(['nama_setting'=>'Pimpinan'])->one();
        $pimpinan = $getPimpinan->nilai_setting;

        $getNipPimpinan = (new Setting)->find()->where(['nama_setting'=>'NIP Pimpinan'])->one();
        $nip_pimpinan = $getNipPimpinan->nilai_setting;

        return $this->render('index',[
            'kodeSkpd'=>$kodeSkpd,
            'kodeSatker'=>$kodeSatker,
            'kodeBidang'=>$kodeBidang,
            'alamat'=>$alamat,
            'email'=>$email,
            'tanggalberdiri'=>$tanggalberdiri,
            'pimpinan'=>$pimpinan,
            'nip_pimpinan'=>$nip_pimpinan,
            
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}

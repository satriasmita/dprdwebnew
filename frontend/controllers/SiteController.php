<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\Posting;
use backend\models\UnggahFile;
use backend\models\StatisPage;
use backend\models\Setting;
use backend\models\PostingKategori;
use backend\models\SurveiIkm;
use backend\models\SurveiIkmDetail;
use backend\models\SurveiDetail;
use backend\models\Model;
use yii\helpers\ArrayHelper;
use backend\models\Berita;
use yii\data\Pagination;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Posting();

        $bagDepartement = $model->getDepartemen();

        return $this->render('index',[
            'bagDepartement'=>$bagDepartement,
        ]);
    }

    


    public function actionDetailPosting($posting_id){
        
        $model = Posting::findOne($posting_id);

        return $this->render('_detailview',[
            'model' => $model
        ]);
    }

    public function actionDetailBerita($posting_id){
        
        $model = Posting::findOne($posting_id);

        return $this->render('_detailnews',[
            'model' => $model
        ]);
    }

    public function actionDetailPengumuman($posting_id){
        
        $model = Posting::findOne($posting_id);

        return $this->render('_detailpengumuman',[
            'model' => $model
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }



    public function actionAllLayanan(){
        $posting_menu = 4;

        $model = new Posting();
        $pelayanan = $model->getDataPostingByMenu($posting_menu);
    
        return $this->render('_allpelayanan',[
            'model' => $pelayanan
        ]);
    }


    // public function actionPegawaiOpd(){

    //     $getSkpd = Setting::find()->where(['nama_setting'=>'SKPD'])->one();
    //     $kodeSkpd = $getSkpd->nilai_setting;

    //     $getSatker = Setting::find()->where(['nama_setting'=>'Satker'])->one();
    //     $kodeSatker = $getSatker->nilai_setting;

    //     $getBidang = Setting::find()->where(['nama_setting'=>'Bidang'])->one();
    //     $kodeBidang = json_decode($getBidang->nilai_setting);

    //     $datapegawai = Mstpegawai::find()
    //                 ->where(['KDSKPD' => $kodeSkpd, 'KDSATKER' => $kodeSatker, ])
    //                 ->andWhere(['IN','BIDANGF',$kodeBidang])
    //                 ->andWhere(['STATUSAKTIF'=>'AKTIF']);

    //     return $this->render('_detailpegawaiopd',[
    //         'model' => $datapegawai,
    //         'kodeSkpd'=>$kodeSkpd,
    //         'kodeSatker'=>$kodeSatker,
    //         'kodeBidang'=>$kodeBidang,
    //     ]);

    // }

    public function actionUnggahDocApl(){

        $model = new UnggahFile();
        $unggah = $model->getListUnggah();

        return $this->render('_unggahfileapp',[
            'model' => $unggah
        ]);

    }

    // public function actionViewPost($id_post){
        
    //     echo $id_post;
    //     die;
    //     $model = Posting::findOne($id_post);

    //     return $this->render('_tamplateViewPost',[
    //         'model' => $model
    //     ]);
    // }

    // public function actionViewPost($berita_id){
        
    //     // echo $berita_id;
    //     // die;
    //     $model = Berita::findOne($berita_id);

    //     return $this->render('_tamplateViewPost',[
    //         'model' => $model
    //     ]);
    // }

   


    public function actionViewPage($id_page){
        
        // echo $id_post;
        // die;
        //bikin ar one ke page ci
        $page = StatisPage::find()->where(['id_page'=>$id_page])->one();
        if(!empty($page)){
            //kita rahakan halaman lgsg ke url_page
            // echo $page->url_page;
            // die;
            return $this->redirect([$page->url_page]);
        }else{
            return $this->redirect('index');
        }
    }

    public function actionViewCategory($id_category){
        $categoryPosting  = PostingKategori::find()->where(['id_kategori'=>$id_category])->one();
        $model = Posting::find()->where(['posting_category'=>$id_category])->all();

        return $this->render('_tamplateViewCategory',[
            'model' => $model,
            'categoryPosting' =>$categoryPosting
        ]);
    }

	public function actionHubungiKami(){
        return $this->render('_hubungikami',[
            // 'model' => $pelayanan
        ]);

    }

	public function actionAtributPuskesmas(){
        return $this->render('_atribut');

    }

    public function actionSarana(){
        return $this->render('_saranaprasarana');

    }

	public function actionIkm(){
    	$model = new SurveiIkm();
    	$model->create_at = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post()) ) {

            if($model->save(false)){

                $getSurveiDetail = SurveiDetail::find()->all();

                if (!empty($getSurveiDetail)) {
                    foreach ($getSurveiDetail as $row) {
                        $detail = new SurveiIkmDetail();

                        $detail->id_ikm = $model->id_ikm;
                        $detail->kode_survei_detail = $row->kode_survei_detail;

                        $detail->create_at = date('Y-m-d H:i:s');

                        $detail->save(false);
                    } 
                }
            }

            return $this->redirect(['isi-survei-ikm','id_ikm'=>$model->id_ikm]);
        }

        return $this->render('_survei_ikm', [
            'model' => $model,
        ]);

    }

    // public function actionIsiSurveiIkm($id_ikm){

    //     $model = SurveiIkm::findOne($id_ikm);

    //     $detail = $model->ikmDetailSurvei;

    //     // $model->create_at = date('Y-m-d H:i:s');

    //     // if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //     //     return $this->redirect(['survei-ikm']);
    //     // }

    //     if ($model->load(Yii::$app->request->post())) {
            
    //         $detail = Model::createMultiple(SurveiIkmDetail::classname());
    //         Model::loadMultiple($detail, Yii::$app->request->post());
  
    //         $transaction = \Yii::$app->db->beginTransaction();
    //         try {
               
    //             //Delete semua relasi dengan kode relasi sama dengan kode penyakit 
    //             $findDetail = $model->ikmDetailSurvei;
    //             $idDetail = ArrayHelper::map($findDetail, 'id_ikm', 'id_ikm');
    //             if (! empty($idDetail)) {                                
    //                 SurveiIkmDetail::deleteAll(['id_ikm' => $id_ikm]);
    //             }
                
    //             //setelah didelete, insert baru transakasi
    //             foreach ($detail as $row) {
    //                 $row->id_ikm = $model->id_ikm;
    //                 $row->create_at = date('Y-m-d H:i:s');
    //                 if (!($flag = $row->save(false))) {
    //                     $transaction->rollBack();
    //                     break;
    //                 } 
    //             }

    //             if ($flag) {
    //                 $transaction->commit();
    //                 return $this->redirect(['ikm', 'id_ikm' => $model->id_ikm]);
    //             }

    //         }catch (Exception $e) {
    //             $transaction->rollBack();
    //         }
    //     } 

    //     return $this->render('_survei_input', [
    //         'model' => $model,
    //         'detail' => $detail,

    //     ]);

    // }




}

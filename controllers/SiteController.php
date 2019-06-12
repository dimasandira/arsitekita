<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\db\Query;

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
                'only' => ['logout'],
                'rules' => [
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
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'projects';
        $projects = (new Query())
        ->select(['PROJECTS.PROJECT_ID AS ID', 'DETAIL_PROJECT.JUDUL AS JUDUL', 'DETAIL_PROJECT.PRICE AS HARGA', 'FILE.NAMA_FILE AS FILE'])
        ->from('PROJECTS')
        ->join('LEFT OUTER JOIN', 'DETAIL_PROJECT', 'DETAIL_PROJECT.DETAIL_ID = PROJECTS.DETAIL_ID')
        ->join('LEFT OUTER JOIN', 'USER', 'USER.USER_ID = PROJECTS.USER_ID')
        ->join('LEFT OUTER JOIN', 'FILE', 'FILE.ID_FILE = DETAIL_PROJECT.ID_FILE')
        ->where(['DETAIL_PROJECT.IS_TAKEN' => '0'])
        ->orderBy(['FILE.TIMESTAMP' => SORT_DESC])
        ->limit(6)->all();
        return $this->render('index', compact('projects'));
    }

    public function actionSignup()
    {
        $this->layout = 'signup';
        return $this->render('signup');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'signin';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('signin', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'about';
        $testimonies = (new Query())
        ->select(['USER.NAMA_USER AS NAMA', 'STATUS.NAMA_STATUS AS STATUS', 'TESTIMONI.TESTIMONI AS TESTIMONI', 'USER.FOTO AS FOTO'])
        ->from('TESTIMONI')
        ->join('LEFT OUTER JOIN', 'USER', 'USER.USER_ID = TESTIMONI.USER_ID')
        ->join('LEFT OUTER JOIN', 'STATUS', 'STATUS.STATUS_ID = USER.STATUS_ID')
        ->limit(9)->all();
        return $this->render('about', compact('testimonies'));
    }

    public function actionProjects()
    {
        $this->layout = 'projects';
        $projects = (new Query())
        ->select(['PROJECTS.PROJECT_ID AS ID', 'DETAIL_PROJECT.JUDUL AS JUDUL', 'DETAIL_PROJECT.PRICE AS HARGA', 'USER.NAMA_USER AS NAMA', 'FILE.NAMA_FILE AS FILE'])
        ->from('PROJECTS')
        ->join('LEFT OUTER JOIN', 'DETAIL_PROJECT', 'DETAIL_PROJECT.DETAIL_ID = PROJECTS.DETAIL_ID')
        ->join('LEFT OUTER JOIN', 'USER', 'USER.USER_ID = PROJECTS.USER_ID')
        ->join('LEFT OUTER JOIN', 'FILE', 'FILE.ID_FILE = DETAIL_PROJECT.ID_FILE')
        ->where(['DETAIL_PROJECT.IS_TAKEN' => '0'])
        ->limit(6)->all();
        return $this->render('projects', compact('projects'));
    }

    public function actionDevelopers() 
    {
        $this->layout = 'developers';
        $developers = (new Query())
        ->select(['USER.USER_ID AS ID', 'KOTA.NAMA_KOTA AS KOTA', 'USER.NAMA_USER AS NAMA', 'USER.FOTO AS FOTO'])
        ->from('USER')
        ->where(['USER.STATUS_ID' => '1'])
        ->join('LEFT OUTER JOIN', 'KOTA', 'KOTA.KOTA_ID= USER.KOTA_ID')
        ->limit(9)->all();
        return $this->render('developers', compact('developers'));
    }
    
    public function actionProfile()
    {
        $this->layout = 'profile';
        return $this->render('profile');
    }

    public function actionProgress($id)
    {
        $this->layout = 'progress';
        $project = (new Query())
        ->select(['DETAIL_PROJECT.DETAIL_ID AS ID', 'FILE.NAMA_FILE AS FILE', 'USER.NAMA_USER AS NAMA',
        'KOTA.NAMA_KOTA AS KOTA' ,'DETAIL_PROJECT.JUDUL AS JUDUL', 'DETAIL_PROJECT.DETAIL AS DETAIL',
        'DETAIL_PROJECT.DEADLINE AS DEADLINE', 'DETAIL_PROJECT.PRICE AS PRICE', 'DETAIL_PROJECT.IS_TAKEN AS IS_TAKEN',
        'DETAIL_PROJECT.START_DATE AS START_DATE', 'DETAIL_PROJECT.FINISH_DATE AS FINISH_DATE',
        'PROJECTS.USER_ID AS USER_ID'])
        ->from('DETAIL_PROJECT')
        ->where(['DETAIL_PROJECT.DETAIL_ID' => $id])
        ->join('LEFT OUTER JOIN', 'KOTA', 'KOTA.KOTA_ID = DETAIL_PROJECT.KOTA_ID')
        ->join('LEFT OUTER JOIN', 'FILE', 'FILE.ID_FILE = DETAIL_PROJECT.ID_FILE')
        ->join('LEFT OUTER JOIN', 'PROJECTS', 'PROJECTS.DETAIL_ID = DETAIL_PROJECT.DETAIL_ID')
        ->join('LEFT OUTER JOIN', 'USER', 'USER.USER_ID = PROJECTS.USER_ID')
        ->one();
        $progress = (new Query())
        ->select(['PAY_TABLE.PAID AS PAY', 'FILE.NAMA_FILE AS FILE', 'PROJECTS_ONGOING.DETAIL_PROGRESS AS DETAIL', 'PROJECTS_ONGOING.PROGRESS AS PRESENTASE'])
        ->from('PROJECTS_ONGOING')
        ->where(['PROJECTS_ONGOING.PROJECT_ID' => $id])
        ->join('LEFT OUTER JOIN', 'PAY_TABLE', 'PAY_TABLE.PAY_ID = PROJECTS_ONGOING.PAY_ID')
        ->join('LEFT OUTER JOIN', 'FILE', 'FILE.ID_FILE = PROJECTS_ONGOING.ID_FILE')
        ->all();
        //$persen = $this->find()->from('PROJECTS_ONGOING')->where(['PROJECT_ID'=>$id])->sum('PROGRESS');
        $persen = (new Query())
        ->select(['sum(PROGRESS) AS SUM'])
        ->from('PROJECTS_ONGOING')
        ->where(['PROJECT_ID'=>$id])->one();
        $total = (new Query())
        ->select(['sum(PAY_TABLE.PAID) AS UANG'])
        ->from('PAY_TABLE')
        ->join('LEFT OUTER JOIN', 'PROJECTS_ONGOING', 'PROJECTS_ONGOING.PAY_ID = PAY_TABLE.PAY_ID')
        ->where(['PROJECTS_ONGOING.PROJECT_ID'=>$id])
        ->one();
        $pembagi = (new Query())
        ->select(['PRICE'])
        ->from('DETAIL_PROJECT')
        ->where(['DETAIL_ID'=>$id])
        ->one();
        $result = (int)((float)$total['UANG'] / (float)$pembagi['PRICE'] * (float)100.00);
        $paid = (new Query())
        ->select(['PAY_TABLE.PAID AS MONEY'])
        ->from('PAY_TABLE')
        ->join('LEFT OUTER JOIN', 'PROJECTS_ONGOING', 'PROJECTS_ONGOING.PAY_ID = PAY_TABLE.PAY_ID')
        ->where(['PROJECTS_ONGOING.PROJECT_ID'=>$id])
        ->all();
        return $this->render('progress', array('progress'=>$progress, 'project'=>$project, 'persen'=>$persen, 'total'=>$total, 'result'=>$result, 'paid'=>$paid));
    }

    public function actionProject($id)
    {
        $this->layout = 'project';
        $project = (new Query())
        ->select(['DETAIL_PROJECT.DETAIL_ID AS ID', 'FILE.NAMA_FILE AS FILE', 'USER.NAMA_USER AS NAMA',
        'KOTA.NAMA_KOTA AS KOTA' ,'DETAIL_PROJECT.JUDUL AS JUDUL', 'DETAIL_PROJECT.DETAIL AS DETAIL',
        'DETAIL_PROJECT.DEADLINE AS DEADLINE', 'DETAIL_PROJECT.PRICE AS PRICE', 'DETAIL_PROJECT.IS_TAKEN AS IS_TAKEN',
        'DETAIL_PROJECT.START_DATE AS START_DATE', 'DETAIL_PROJECT.FINISH_DATE AS FINISH_DATE',
        'PROJECTS.USER_ID AS USER_ID'])
        ->from('DETAIL_PROJECT')
        ->where(['DETAIL_PROJECT.DETAIL_ID' => $id])
        ->join('LEFT OUTER JOIN', 'KOTA', 'KOTA.KOTA_ID = DETAIL_PROJECT.KOTA_ID')
        ->join('LEFT OUTER JOIN', 'FILE', 'FILE.ID_FILE = DETAIL_PROJECT.ID_FILE')
        ->join('LEFT OUTER JOIN', 'PROJECTS', 'PROJECTS.DETAIL_ID = DETAIL_PROJECT.DETAIL_ID')
        ->join('LEFT OUTER JOIN', 'USER', 'USER.USER_ID = PROJECTS.USER_ID')
        ->one();
        return $this->render('project', compact('project'));
    }

    public function actionRanking()
    {
        return $this->render('ranking');
    }

    public function actionNotification()
    {
        $this->layout = 'notification';
        return $this->render('notification');
    }

    public function actionManage()
    {
        $this->layout = 'manage';
        return $this->render('manage');
    }

    public function actionArticle1()
    {
        $this->layout = 'article';
        return $this->render('article1');
    }

    public function actionArticle2()
    {
        $this->layout = 'article';
        return $this->render('article2');
    }

    public function actionArticle3()
    {
        $this->layout = 'article';
        return $this->render('article3');
    }

    public function actionArticle4()
    {
        $this->layout = 'article';
        return $this->render('article4');
    }

    public function actionArticle5()
    {
        $this->layout = 'article';
        return $this->render('article5');
    }

    public function actionFormfile()
    {
        $this->layout = 'form';
        return $this->render('formfile');
    }

    public function actionFormprofile()
    {
        $this->layout = 'form';
        return $this->render('formprofile');
    }

    public function actionFormprogress()
    {
        $this->layout = 'form';
        return $this->render('formprogress');
    }

    public function actionFormproject()
    {
        $this->layout = 'form';
        return $this->render('formproject');
    }

    public function actionFormtestimoni()
    {
        $this->layout = 'form';
        return $this->render('formtestimoni');
    }

    public function actionFormtotal()
    {
        $this->layout = 'form';
        return $this->render('formtotal');
    }
}

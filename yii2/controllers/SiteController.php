<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
// use yii\web\Response;
use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;
use app\models\MyList;
class SiteController extends Controller
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }
    //
    // /**
    //  * {@inheritdoc}
    //  */
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
    //
    // /**
    //  * Displays homepage.
    //  *
    //  * @return string
    //  */
    public function actionIndex()
    {
      $var = 'Главная страница '  ;
      $array = MyList::getAll();
        return $this->render('index',['varinView'=>$var, 'arrayinView'=>$array]);
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionHello()
    {
      $var = 'Главная страница '  ;
      $array = MyList::getAll();

      return $this->render('hello',['varinView'=>$var, 'arrayinView'=>$array]) ;
    }
    public function actionView($id)
    {
      $one=MyList::getOne($id);
      return $this->render('view',['one'=>$one]);
    }

    // /**
    //  * Login action.
    //  *
    //  * @return Response|string
    //  */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }
    //
    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     }
    //
    //     $model->password = '';
    //     return $this->render('login', [
    //         'model' => $model,
    //     ]);
    // }
    //
    // /**
    //  * Logout action.
    //  *
    //  * @return Response
    //  */
    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();
    //
    //     return $this->goHome();
    // }
    //
    // /**
    //  * Displays contact page.
    //  *
    //  * @return Response|string
    //  */
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    //         Yii::$app->session->setFlash('contactFormSubmitted');
    //
    //         return $this->refresh();
    //     }
    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }
    //
    // /**
    //  * Displays about page.
    //  *
    //  * @return string
    //  */

}

<?php
namespace myzero1\z1site\controllers\base;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use myzero1\z1site\models\LoginForm;

/**
 * Base site controller
 */
class BaseSiteController extends Controller
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
                        'actions' => ['login', 'error', 'placeholder', 'e403', 'e404', 'e500'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'main', 'notice', 'clear-assets-cache'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'layout';
        return $this->render('index');
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


    /**
     * Renders the main msg of site
     * @return string
     */
    public function actionMain()
    {
        return $this->render('main');
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionNotice()
    {
        return $this->render('notice');
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionE403()
    {
        throw new \yii\web\HttpException(403);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionE404()
    {
        throw new \yii\web\HttpException(404);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionE500()
    {
        throw new \yii\web\HttpException(500);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionPlaceholder($position = 'default')
    {
        return $this->render('placeholder', ['position' => $position]);
    }

    /**
     * Renders the main msg of notice
     * @return string
     */
    public function actionClearAssetsCache()
    {
        return $this->render('placeholder', ['position' => $position]);
    }
}

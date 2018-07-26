<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\controllers;

use Yii;
use backend\models\WcupAdmin;
use backend\models\WcupAdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\SignupForm ;
use backend\models\LoginForm;
use yii\filters\AccessControl;

/**
 * WcupAdminController implements the CRUD actions for WcupAdmin model.
 */
class WcupAdminController extends Controller
{
    public $layout='main_layout';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        /*return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];*/
         return [
            'access' => [
                'class' => AccessControl::className(),
               //'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup','login'],
                        'allow' => true,
                        //'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','create','view','delete','update','index','about'],
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
     * Lists all WcupAdmin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcupAdminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcupAdmin model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WcupAdmin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcupAdmin();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->admin_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcupAdmin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->admin_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcupAdmin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcupAdmin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WcupAdmin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WcupAdmin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionSignup ()
{
    // 实例化一个表单模型，这个表单模型我们还没有创建，等一下后面再创建
    $model = new SignupForm();

    // 下面这一段if是我们刚刚分析的第二个小问题的实现，下面让我具体的给你描述一下这几个方法的含义吧
    // $model->load() 方法，实质是把post过来的数据赋值给model的属性
    // $model->signup() 方法, 是我们要实现的具体的添加用户操作
    if ($model->load(Yii::$app->request->post()) && $model->signup()) {
        // 添加完用户之后，我们跳回到index操作即列表页
        return $this->redirect(['index']);
    }

    // 下面这一段是我们刚刚分析的第一个小问题的实现
    // 渲染添加新用户的表单
    return $this->render('signup', [
        'model' => $model,
    ]);
}

public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $searchModel = new WcupAdminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

        } else {
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
 $model = new LoginForm();
         return $this->render('login', [
                'model' => $model,
            ]);
    }
    public function actionAbout()
    {
        return $this->render('about');
    }

}

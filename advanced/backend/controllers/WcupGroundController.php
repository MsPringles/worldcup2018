<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\controllers;

use Yii;
use backend\models\WcupGround;
use backend\models\WcupGroundSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * WcupGroundController implements the CRUD actions for WcupGround model.
 */
class WcupGroundController extends Controller
{
    public $layout='main_layout';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
                        'actions' => ['logout','create','view','delete','update','index'],
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
     * Lists all WcupGround models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcupGroundSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcupGround model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WcupGround model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcupGround();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if(Yii::$app->request->isPost)
        {
         $file = UploadedFile::getInstance($model,'ground_picture');
    $path = 'data/'.time().".".$file->getExtension();
    
if($file->saveAs($path) === true)
    { 
        $model->ground_picture= $path;
        
    }
    $model->update();
     
}
            return $this->redirect(['view', 'id' => $model->ground_address]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcupGround model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
       $temp=$model->ground_picture;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                if(Yii::$app->request->isPost)
        {
         $file = UploadedFile::getInstance($model,'ground_picture'); 
      
         if($file==null){$model->ground_picture=$temp;}
   else if($temp!=null){unlink($temp);}
    $path = 'data/'.time().".".$file->getExtension();
if($file->saveAs($path) === true)
    { 
        $model->ground_picture= $path;
        
    }
    $model->update();
     
}
            return $this->redirect(['view', 'id' => $model->ground_address]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcupGround model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
$temp=$model->ground_picture;
 $model->delete();
 unlink($temp);


        return $this->redirect(['index']);
    }

    /**
     * Finds the WcupGround model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return WcupGround the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WcupGround::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

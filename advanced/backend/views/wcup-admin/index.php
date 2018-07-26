<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'admin_id',
            'admin_password',
            'admin_name',
            'admin_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

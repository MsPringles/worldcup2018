<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '比赛日期',
            '时间',
            '组别',
            '国家1',
            '国家2',
            // '比分',
            // '比赛地',
            // '类型',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

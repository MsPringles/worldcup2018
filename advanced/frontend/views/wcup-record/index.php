<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page is to query records
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '记录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    
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

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

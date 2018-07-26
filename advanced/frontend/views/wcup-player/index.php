<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page is to query players
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupPlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '球员';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '国家',
            '球员',
            '场次',
            '出场时间',
            '进球',
            // '助攻',
            // '射门',
            // '传球',
            // '传准',
            // '传威胁球',
            // '犯规',
            // '被侵犯',
            // '抢断',
            // '解围',
            // '扑救',
            // '红牌',
            // '黄牌',

             [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

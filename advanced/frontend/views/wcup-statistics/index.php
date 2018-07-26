<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    * This page is to query statistics
    
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupStatisticsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '统计';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-statistics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'statistics_nation',
            'statistics_record:ntext',

             [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

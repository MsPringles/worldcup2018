<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to query countries
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupCountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '城市';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '国家',
            '编号',

             [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

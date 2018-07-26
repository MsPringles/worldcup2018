<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to query grounds
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupGroundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '场地';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ground_address',
            'ground_info:ntext',
            'ground_picture',

             [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

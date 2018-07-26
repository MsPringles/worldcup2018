<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupTopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '进球';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-top-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'top_name',
            'top_number',

             [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'//小眼睛
            ],
        ],
    ]); ?>
</div>

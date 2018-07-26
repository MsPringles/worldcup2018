<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page is to show the records' detailed information
    
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupRecord */

$this->title = $model->组别;
$this->params['breadcrumbs'][] = ['label' => '记录', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-record-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '比赛日期',
            '时间',
            '组别',
            '国家1',
            '国家2',
            '比分',
            '比赛地',
            '类型',
        ],
    ]) ?>

</div>

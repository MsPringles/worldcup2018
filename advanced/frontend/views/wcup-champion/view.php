<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180722
    * This page is to show the champions' detailed information
    
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupChampion */

$this->title = $model->champion_country;
$this->params['breadcrumbs'][] = ['label' => '比赛', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-champion-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'champion_country',
            'champion_times',
            'champion_year:ntext',
        ],
    ]) ?>

</div>

<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page is to show the judges' detailed information
    
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupJudge */

$this->title = $model->judge_name;
$this->params['breadcrumbs'][] = ['label' => '裁判', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-judge-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'judge_tag',
            'judge_name',
            'judge_nation',
        ],
    ]) ?>

</div>

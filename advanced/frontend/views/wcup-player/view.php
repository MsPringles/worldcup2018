<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page is to show the players' detailed information
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupPlayer */

$this->title = $model->球员;
$this->params['breadcrumbs'][] = ['label' => '球员', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '国家',
            '球员',
            '场次',
            '出场时间',
            '进球',
            '助攻',
            '射门',
            '传球',
            '传准',
            '传威胁球',
            '犯规',
            '被侵犯',
            '抢断',
            '解围',
            '扑救',
            '红牌',
            '黄牌',
        ],
    ]) ?>

</div>

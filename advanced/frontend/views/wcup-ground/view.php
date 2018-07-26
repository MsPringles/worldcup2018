<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to show the grounds' detailed information
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupGround */

$this->title = $model->ground_address;
$this->params['breadcrumbs'][] = ['label' => '场地', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ground_address',
            'ground_info:ntext',
            'ground_picture',
        ],
    ]) ?>

</div>

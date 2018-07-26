<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupStatistics */

$this->title = 'Update Wcup Statistics: ' . $model->statistics_nation;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Statistics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->statistics_nation, 'url' => ['view', 'id' => $model->statistics_nation]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-statistics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

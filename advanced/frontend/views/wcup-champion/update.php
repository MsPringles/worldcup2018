<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180722
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupChampion */

$this->title = 'Update Wcup Champion: ' . $model->champion_country;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Champions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->champion_country, 'url' => ['view', 'id' => $model->champion_country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-champion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

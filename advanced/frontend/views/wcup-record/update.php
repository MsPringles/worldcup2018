<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupRecord */

$this->title = 'Update Wcup Record: ' . $model->组别;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->组别, 'url' => ['view', 'id' => $model->组别]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

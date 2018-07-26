<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupPlayer */

$this->title = 'Update Wcup Player: ' . $model->球员;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->球员, 'url' => ['view', 'id' => $model->球员]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

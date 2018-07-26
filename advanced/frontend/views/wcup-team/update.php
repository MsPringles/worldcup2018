<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupTeam */

$this->title = 'Update Wcup Team: ' . $model->team_nation;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_nation, 'url' => ['view', 'id' => $model->team_nation]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

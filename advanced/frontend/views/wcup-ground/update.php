<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupGround */

$this->title = 'Update Wcup Ground: ' . $model->ground_address;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Grounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ground_address, 'url' => ['view', 'id' => $model->ground_address]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-ground-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

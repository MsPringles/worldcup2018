<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupTop */

$this->title = 'Update Wcup Top: ' . $model->top_name;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Tops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->top_name, 'url' => ['view', 'id' => $model->top_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-top-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

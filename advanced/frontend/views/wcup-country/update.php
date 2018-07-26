<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupCountry */

$this->title = 'Update Wcup Country: ' . $model->国家;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->国家, 'url' => ['view', 'id' => $model->国家]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

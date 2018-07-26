<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WcupStatistics */

$this->title = 'Create Wcup Statistics';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Statistics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-statistics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

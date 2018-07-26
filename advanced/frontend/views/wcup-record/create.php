<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WcupRecord */

$this->title = 'Create Wcup Record';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

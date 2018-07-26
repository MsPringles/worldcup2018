<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page we do not use
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupComment */

$this->title = 'Update Wcup Comment: ' . $model->comment_id;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comment_id, 'url' => ['view', 'id' => $model->comment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

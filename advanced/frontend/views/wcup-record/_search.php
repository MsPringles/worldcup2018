<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '比赛日期') ?>

    <?= $form->field($model, '时间') ?>

    <?= $form->field($model, '组别') ?>

    <?= $form->field($model, '国家1') ?>

    <?= $form->field($model, '国家2') ?>

    <?php // echo $form->field($model, '比分') ?>

    <?php // echo $form->field($model, '比赛地') ?>

    <?php // echo $form->field($model, '类型') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

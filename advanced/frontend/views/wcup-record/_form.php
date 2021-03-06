<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '比赛日期')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '时间')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '组别')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '国家1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '国家2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '比分')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '比赛地')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '类型')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

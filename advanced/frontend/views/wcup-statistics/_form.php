<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupStatistics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-statistics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'statistics_nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statistics_record')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

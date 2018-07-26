<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupCountry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '国家')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '编号')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

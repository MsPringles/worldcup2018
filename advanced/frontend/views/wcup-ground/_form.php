<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupGround */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-ground-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ground_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ground_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ground_picture')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

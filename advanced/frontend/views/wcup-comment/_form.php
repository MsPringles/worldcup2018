<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-comment-form">

    <?php $form = ActiveForm::begin(); ?>
    <div style = "width: 500px;float:left">

    <?= $form->field($model, 'comment_content')->textInput(['maxlength' => true]) ?>

    <?php
    	$id = Yii::$app -> user -> identity ->getId();
    	$model -> comment_userid = $id;
    ?>

    <?= $form->field($model, 'comment_userid')->textInput(['readOnly' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	</div>
    <?php ActiveForm::end(); ?>

</div>

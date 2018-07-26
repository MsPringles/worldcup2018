<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupJudge */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-judge-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judge_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judge_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judge_nation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupChampion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-champion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'champion_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'champion_times')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'champion_year')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

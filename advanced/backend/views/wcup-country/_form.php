<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupCountry */
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

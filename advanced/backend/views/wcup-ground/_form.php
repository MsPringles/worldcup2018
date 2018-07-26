<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupGround */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-ground-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],  ]); ?>

    <?= $form->field($model, 'ground_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ground_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ground_picture')->fileInput();?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

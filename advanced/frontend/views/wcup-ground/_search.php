<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WcupGroundSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-ground-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ground_address') ?>

    <?= $form->field($model, 'ground_info') ?>

    <?= $form->field($model, 'ground_picture') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

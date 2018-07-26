<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupPlayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '国家')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '球员')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '场次')->textInput() ?>

    <?= $form->field($model, '出场时间')->textInput() ?>

    <?= $form->field($model, '进球')->textInput() ?>

    <?= $form->field($model, '助攻')->textInput() ?>

    <?= $form->field($model, '射门')->textInput() ?>

    <?= $form->field($model, '传球')->textInput() ?>

    <?= $form->field($model, '传准')->textInput() ?>

    <?= $form->field($model, '传威胁球')->textInput() ?>

    <?= $form->field($model, '犯规')->textInput() ?>

    <?= $form->field($model, '被侵犯')->textInput() ?>

    <?= $form->field($model, '抢断')->textInput() ?>

    <?= $form->field($model, '解围')->textInput() ?>

    <?= $form->field($model, '扑救')->textInput() ?>

    <?= $form->field($model, '红牌')->textInput() ?>

    <?= $form->field($model, '黄牌')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

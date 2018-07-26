<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupPlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wcup-player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '国家') ?>

    <?= $form->field($model, '球员') ?>

    <?= $form->field($model, '场次') ?>

    <?= $form->field($model, '出场时间') ?>

    <?= $form->field($model, '进球') ?>

    <?php // echo $form->field($model, '助攻') ?>

    <?php // echo $form->field($model, '射门') ?>

    <?php // echo $form->field($model, '传球') ?>

    <?php // echo $form->field($model, '传准') ?>

    <?php // echo $form->field($model, '传威胁球') ?>

    <?php // echo $form->field($model, '犯规') ?>

    <?php // echo $form->field($model, '被侵犯') ?>

    <?php // echo $form->field($model, '抢断') ?>

    <?php // echo $form->field($model, '解围') ?>

    <?php // echo $form->field($model, '扑救') ?>

    <?php // echo $form->field($model, '红牌') ?>

    <?php // echo $form->field($model, '黄牌') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

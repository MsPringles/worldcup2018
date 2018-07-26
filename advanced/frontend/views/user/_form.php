<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\user;
use frontend\controllers\site;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
<!--输入email和status-->
<div style="width:500px;float:left;margin-bottom: 20px;">
	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'status')->dropDownList(User::allStatus(),['prompt' => '请选择状态']); ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
 </div>

    <?php ActiveForm::end(); ?>
    
</div>

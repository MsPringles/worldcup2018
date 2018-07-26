<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WcupGround */

$this->title = 'Create Wcup Ground';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Grounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

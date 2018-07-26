<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WcupCountry */

$this->title = 'Create Wcup Country';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

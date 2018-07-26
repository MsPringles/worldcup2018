<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupJudge */

$this->title = 'Update Wcup Judge: ' . $model->judge_name;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Judges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->judge_name, 'url' => ['view', 'id' => $model->judge_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-judge-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

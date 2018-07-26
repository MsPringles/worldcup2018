<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupRecord */

$this->title = 'Update Wcup Record: ' . $model->组别;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->组别, 'url' => ['view', 'id' => $model->组别]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

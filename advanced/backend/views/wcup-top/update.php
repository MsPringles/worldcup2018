<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupTop */

$this->title = 'Update Wcup Top: ' . $model->top_name;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Tops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->top_name, 'url' => ['view', 'id' => $model->top_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-top-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

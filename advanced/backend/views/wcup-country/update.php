<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupCountry */

$this->title = 'Update Wcup Country: ' . $model->国家;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->国家, 'url' => ['view', 'id' => $model->国家]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

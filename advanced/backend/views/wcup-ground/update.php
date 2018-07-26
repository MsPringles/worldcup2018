<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupGround */

$this->title = 'Update Wcup Ground: ' . $model->ground_address;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Grounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ground_address, 'url' => ['view', 'id' => $model->ground_address]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-ground-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

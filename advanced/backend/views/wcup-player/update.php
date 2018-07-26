<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupPlayer */

$this->title = 'Update Wcup Player: ' . $model->球员;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->球员, 'url' => ['view', 'id' => $model->球员]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wcup-player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

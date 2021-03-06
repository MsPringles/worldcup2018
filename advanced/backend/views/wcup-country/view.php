<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupCountry */

$this->title = $model->国家;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->国家], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->国家], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '国家',
            '编号',
        ],
    ]) ?>

</div>

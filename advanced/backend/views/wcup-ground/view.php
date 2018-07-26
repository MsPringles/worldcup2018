<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupGround */

$this->title = $model->ground_address;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Grounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ground_address], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ground_address], [
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
            'ground_address',
            'ground_info:ntext',
    [
    'label'=>'photo',
    'format' => 'raw',
    'value' => function($model){
        return Html::img($model->ground_picture);
    }

],
        ],
    ]) ?>

</div>

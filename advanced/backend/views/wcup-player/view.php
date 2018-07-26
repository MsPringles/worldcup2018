<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcupPlayer */

$this->title = $model->球员;
$this->params['breadcrumbs'][] = ['label' => 'Wcup Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->球员], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->球员], [
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
            '球员',
            '场次',
            '出场时间',
            '进球',
            '助攻',
            '射门',
            '传球',
            '传准',
            '传威胁球',
            '犯规',
            '被侵犯',
            '抢断',
            '解围',
            '扑救',
            '红牌',
            '黄牌',
        ],
    ]) ?>

</div>

<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupPlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Player', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '国家',
            '球员',
            '场次',
            '出场时间',
            '进球',
            // '助攻',
            // '射门',
            // '传球',
            // '传准',
            // '传威胁球',
            // '犯规',
            // '被侵犯',
            // '抢断',
            // '解围',
            // '扑救',
            // '红牌',
            // '黄牌',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

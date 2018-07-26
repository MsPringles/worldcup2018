<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupJudgeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Judges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-judge-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Judge', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'judge_tag',
            'judge_name',
            'judge_nation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

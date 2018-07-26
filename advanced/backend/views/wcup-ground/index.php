<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupGroundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Grounds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Ground', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ground_address',
            'ground_info:ntext',
            [
    'label'=>'photo',
    'format' => 'raw',
    'value' => function($model){
        return Html::img($model->ground_picture,array('width'=>'100px','height'=>'100px'));
    }

],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

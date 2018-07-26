<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcupCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wcup Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wcup Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comment_id',
            'comment_content',
            'comment_userid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

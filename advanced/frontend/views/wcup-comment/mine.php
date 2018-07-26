<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to show the current user's comments
*/
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WcupCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '评论';
$this->params['breadcrumbs'][] = $this->title;
?>
<h3>我的评论</h3>
<?php
echo ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView' => '_item',
]);
?>
<p></p>


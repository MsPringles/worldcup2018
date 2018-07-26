<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to show current user's information
*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Mine';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-mine">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Mine page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
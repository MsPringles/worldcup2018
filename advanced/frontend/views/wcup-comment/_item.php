<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    
*/
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<br>
<div class="post">
    <strong><?= Html::encode($model->comment_id) ?></strong>
    <a href= "http://localhost:8080/advanced2018/frontend/web/index.php?r=wcup-comment%2Fview&id=<?= $model->comment_id ?>"> <?= HtmlPurifier::process($model->comment_content) ?> </a>
    <br>
</div>

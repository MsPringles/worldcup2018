<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcupAdmin */

$this->title = 'Create Wcup Admin';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

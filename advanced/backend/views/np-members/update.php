<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMembers */

$this->title = 'Update Np Members: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Np Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->np_member_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

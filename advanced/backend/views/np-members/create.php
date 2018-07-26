<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NpMembers */

$this->title = 'Create Np Members';
$this->params['breadcrumbs'][] = ['label' => 'Np Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

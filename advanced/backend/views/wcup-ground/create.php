<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcupGround */

$this->title = 'Create Wcup Ground';
$this->params['breadcrumbs'][] = ['label' => 'Wcup Grounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcup-ground-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

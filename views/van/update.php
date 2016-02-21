<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Van */

$this->title = 'Update Van: ' . ' ' . $model->v_id;
$this->params['breadcrumbs'][] = ['label' => 'Vans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->v_id, 'url' => ['view', 'id' => $model->v_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="van-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

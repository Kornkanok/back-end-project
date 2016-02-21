<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Descriptionvan */

$this->title = 'Update Descriptionvan: ' . ' ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Descriptionvans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="descriptionvan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

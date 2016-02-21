<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceTh */

$this->title = 'Update Province Th: ' . ' ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Province Ths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="province-th-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

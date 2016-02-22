<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Province */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Province',
]) . ' ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Provinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="station-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'station_name') ?>

    <?= $form->field($model, 'station_lat') ?>

    <?= $form->field($model, 'station_lon') ?>

    <?= $form->field($model, 'station_zoom') ?>

    <?php // echo $form->field($model, 'station_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

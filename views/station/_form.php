<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Station */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="station-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_lon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_zoom')->textInput() ?>

    <?= $form->field($model, 'station_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

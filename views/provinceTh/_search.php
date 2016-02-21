<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceThSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-th-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'province_id') ?>

    <?= $form->field($model, 'province_name') ?>

    <?= $form->field($model, 'province_lat') ?>

    <?= $form->field($model, 'province_lon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

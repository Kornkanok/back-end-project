<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_lon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

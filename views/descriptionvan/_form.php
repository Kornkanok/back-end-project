<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Descriptionvan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descriptionvan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'v_tion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

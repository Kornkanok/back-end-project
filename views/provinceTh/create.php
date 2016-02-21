<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProvinceTh */

$this->title = 'Create Province Th';
$this->params['breadcrumbs'][] = ['label' => 'Province Ths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-th-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

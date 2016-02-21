<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Descriptionvan */

$this->title = 'Create Descriptionvan';
$this->params['breadcrumbs'][] = ['label' => 'Descriptionvans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descriptionvan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Descriptions */

$this->title = 'Create Descriptions';
$this->params['breadcrumbs'][] = ['label' => 'Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descriptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

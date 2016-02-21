<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DescriptionvanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Descriptionvans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descriptionvan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Descriptionvan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'v_tion',
            'Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

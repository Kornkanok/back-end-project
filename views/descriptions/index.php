<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DescriptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Descriptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descriptions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Descriptions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'd_tion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProvinceThSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Province Ths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-th-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Province Th', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'province_id',
            'province_name',
            'province_lat',
            'province_lon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

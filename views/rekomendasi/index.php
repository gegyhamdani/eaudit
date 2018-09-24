<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekomendasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekomendasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekomendasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekomendasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'no_rekomendasi',
            'nama_rekomendasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DlhpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dlhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dlhp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dlhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_hlhp',
            'nama_item',
            'total',
            'create_date',
            //'update_date',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

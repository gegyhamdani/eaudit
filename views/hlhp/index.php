<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HlhpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hlhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hlhp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hlhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_hsp',
            'skpd',
            'no_lhp',
            'tahun',
            //'total_anggaran',
            //'total_relasi',
            //'total_pemeriksaan',
            //'create_date',
            //'update_date',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

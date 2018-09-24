<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DpemeriksaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dpemeriksaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dpemeriksaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dpemeriksaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_dlhp',
            'id_rekomendasi',
            'temuan',
            'keterangan',
            //'create_date',
            //'update_date',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

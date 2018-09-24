<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HspSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hsps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hsp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hsp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_team',
            'no_sp',
            'periode_awal',
            'periode_akhir',
            //'pmkb',
            //'lhp',
            //'tindak_lanjut',
            //'create_date',
            //'update_date',
            //'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

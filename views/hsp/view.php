<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hsp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hsps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hsp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_team',
            'no_sp',
            'periode_awal',
            'periode_akhir',
            'pmkb',
            'lhp',
            'tindak_lanjut',
            'create_date',
            'update_date',
            'create_by',
            'update_by',
        ],
    ]) ?>

</div>
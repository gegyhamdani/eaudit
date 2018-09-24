<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dsp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dsps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dsp-view">

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
            'id_hsp',
            'id_anggota',
            'create_date',
            'update_date',
            'create_by',
            'update_by',
        ],
    ]) ?>

</div>

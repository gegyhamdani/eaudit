<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dsp */

$this->title = 'Update Dsp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dsps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dsp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

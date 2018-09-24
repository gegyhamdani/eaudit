<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dsp */

$this->title = 'Create Dsp';
$this->params['breadcrumbs'][] = ['label' => 'Dsps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dsp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

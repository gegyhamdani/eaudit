<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dpemeriksaan */

$this->title = 'Create Dpemeriksaan';
$this->params['breadcrumbs'][] = ['label' => 'Dpemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dpemeriksaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

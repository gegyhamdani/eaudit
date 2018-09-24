<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hpemeriksaan */

$this->title = 'Create Hpemeriksaan';
$this->params['breadcrumbs'][] = ['label' => 'Hpemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hpemeriksaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

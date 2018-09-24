<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rekomendasi */

$this->title = 'Create Rekomendasi';
$this->params['breadcrumbs'][] = ['label' => 'Rekomendasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekomendasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

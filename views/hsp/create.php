<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hsp */

$this->title = 'Create Hsp';
$this->params['breadcrumbs'][] = ['label' => 'Hsps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hsp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

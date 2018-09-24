<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dlhp */

$this->title = 'Create Dlhp';
$this->params['breadcrumbs'][] = ['label' => 'Dlhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dlhp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

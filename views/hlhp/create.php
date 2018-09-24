<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hlhp */

$this->title = 'Create Hlhp';
$this->params['breadcrumbs'][] = ['label' => 'Hlhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hlhp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

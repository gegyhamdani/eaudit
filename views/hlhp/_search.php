<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HlhpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hlhp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_hsp') ?>

    <?= $form->field($model, 'skpd') ?>

    <?= $form->field($model, 'no_lhp') ?>

    <?= $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'total_anggaran') ?>

    <?php // echo $form->field($model, 'total_relasi') ?>

    <?php // echo $form->field($model, 'total_pemeriksaan') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

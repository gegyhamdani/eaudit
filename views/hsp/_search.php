<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HspSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hsp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_team') ?>

    <?= $form->field($model, 'no_sp') ?>

    <?= $form->field($model, 'periode_awal') ?>

    <?= $form->field($model, 'periode_akhir') ?>

    <?php // echo $form->field($model, 'pmkb') ?>

    <?php // echo $form->field($model, 'lhp') ?>

    <?php // echo $form->field($model, 'tindak_lanjut') ?>

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

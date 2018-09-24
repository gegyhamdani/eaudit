<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dsp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dsp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_hsp')->textInput() ?>

    <?= $form->field($model, 'id_anggota')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hsp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hsp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_team')->textInput() ?>

    <?= $form->field($model, 'no_sp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'periode_awal')->textInput() ?>

    <?= $form->field($model, 'periode_akhir')->textInput() ?>

    <?= $form->field($model, 'pmkb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lhp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindak_lanjut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

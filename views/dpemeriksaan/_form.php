<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dpemeriksaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dpemeriksaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_dlhp')->textInput() ?>

    <?= $form->field($model, 'id_rekomendasi')->textInput() ?>

    <?= $form->field($model, 'temuan')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

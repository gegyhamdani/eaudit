<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hlhp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hlhp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_hsp')->textInput() ?>

    <?= $form->field($model, 'skpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_lhp')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'total_anggaran')->textInput() ?>

    <?= $form->field($model, 'total_relasi')->textInput() ?>

    <?= $form->field($model, 'total_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

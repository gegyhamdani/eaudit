<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hpemeriksaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hpemeriksaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_hlhp')->textInput() ?>

    <?= $form->field($model, 'no_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

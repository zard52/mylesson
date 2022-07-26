<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lesson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tutor_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'start')->textInput(['type' => 'datetime-local']) ?>

    <?= $form->field($model, 'end')->textInput(['type' => 'datetime-local']) ?>

    <?= $form->field($model, 'status')->dropDownList(['1' => 'Active', '0' => 'Inactive'],['prompt'=>'Select Option']) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

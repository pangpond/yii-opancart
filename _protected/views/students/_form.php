<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SchoolClass;
use app\models\SchoolRoom;

use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'citizenid')->widget(\yii\widgets\MaskedInput::classname(), [
        'mask' => '9-9999-99999-99-9',
    ]) ?>

    <?= $form->field($model, 'class_id')->dropDownList(ArrayHelper::map(SchoolClass::find()->all(), 'id', 'name'), ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'room_id')->dropDownList(ArrayHelper::map(SchoolRoom::find()->all(), 'id', 'name'), ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'created_at')->widget(DateTimePicker::classname(), [
        'name' => 'created_at',
        'type' => DateTimePicker::TYPE_INPUT,
        'value' => '23-Feb-1982 12:35 AM',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd HH:ii:ss'
        ]
    ]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

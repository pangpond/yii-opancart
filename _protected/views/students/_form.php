<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\SchoolClass;
use app\models\SchoolRoom;

use kartik\widgets\DateTimePicker;

use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo TabularForm::widget([
    'dataProvider'=>$dataProvider,
    'form'=>$form,
    'attributes'=>$model->formAttribs
]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'dob')->widget(DateTimePicker::classname(), [
        'name' => 'dob',
        'type' => DateTimePicker::TYPE_INPUT,
        'value' => '23-Feb-1982 12:35 AM',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd HH:ii:ss'
        ]
    ]) ?>

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

<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoice_no')->textInput() ?>

    <?= $form->field($model, 'invoice_prefix')->textInput(['maxlength' => 26]) ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <?= $form->field($model, 'store_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'store_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'customer_group_id')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 96]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_firstname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_lastname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_company')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_company_id')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_tax_id')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'payment_address_1')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_address_2')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_city')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_postcode')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'payment_country')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_country_id')->textInput() ?>

    <?= $form->field($model, 'payment_zone')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_zone_id')->textInput() ?>

    <?= $form->field($model, 'payment_address_format')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'payment_method')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'payment_code')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_firstname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'shipping_lastname')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'shipping_company')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'shipping_address_1')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_address_2')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_city')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_postcode')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'shipping_country')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_country_id')->textInput() ?>

    <?= $form->field($model, 'shipping_zone')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_zone_id')->textInput() ?>

    <?= $form->field($model, 'shipping_address_format')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'shipping_method')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'shipping_code')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'order_status_id')->textInput() ?>

    <?= $form->field($model, 'affiliate_id')->textInput() ?>

    <?= $form->field($model, 'commission')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'currency_code')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'currency_value')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'forwarded_ip')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'user_agent')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'accept_language')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'date_added')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

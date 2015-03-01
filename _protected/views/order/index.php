<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderFrom2014Searc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'invoice_no',
            'invoice_prefix',
            'store_id',
            'store_name',
            // 'store_url:url',
            // 'customer_id',
            // 'customer_group_id',
            // 'firstname',
            // 'lastname',
            // 'email:email',
            // 'telephone',
            // 'fax',
            // 'payment_firstname',
            // 'payment_lastname',
            // 'payment_company',
            // 'payment_company_id',
            // 'payment_tax_id',
            // 'payment_address_1',
            // 'payment_address_2',
            // 'payment_city',
            // 'payment_postcode',
            // 'payment_country',
            // 'payment_country_id',
            // 'payment_zone',
            // 'payment_zone_id',
            // 'payment_address_format:ntext',
            // 'payment_method',
            // 'payment_code',
            // 'shipping_firstname',
            // 'shipping_lastname',
            // 'shipping_company',
            // 'shipping_address_1',
            // 'shipping_address_2',
            // 'shipping_city',
            // 'shipping_postcode',
            // 'shipping_country',
            // 'shipping_country_id',
            // 'shipping_zone',
            // 'shipping_zone_id',
            // 'shipping_address_format:ntext',
            // 'shipping_method',
            // 'shipping_code',
            // 'comment:ntext',
            // 'total',
            // 'order_status_id',
            // 'affiliate_id',
            // 'commission',
            // 'language_id',
            // 'currency_id',
            // 'currency_code',
            // 'currency_value',
            // 'ip',
            // 'forwarded_ip',
            // 'user_agent',
            // 'accept_language',
            // 'date_added',
            // 'date_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_from_2014".
 *
 * @property integer $customer_id
 * @property string $date_added
 * @property string $total
 * @property string $shipping_zone
 * @property integer $order_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $customer_group
 */
class OrderFrom2014 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_from_2014';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'date_added', 'shipping_zone', 'firstname', 'lastname', 'email', 'telephone', 'fax'], 'required'],
            [['customer_id', 'order_id'], 'integer'],
            [['date_added'], 'safe'],
            [['total'], 'number'],
            [['shipping_zone'], 'string', 'max' => 128],
            [['firstname', 'lastname', 'telephone', 'fax', 'customer_group'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 96]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'date_added' => 'Date Added',
            'total' => 'Total',
            'shipping_zone' => 'Shipping Zone',
            'order_id' => 'Order ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'customer_group' => 'Customer Group',
        ];
    }
}

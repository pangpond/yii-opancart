<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_watch".
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
class OrderWatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_watch';
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

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'order' => array(self::BELONGS_TO, 'Order', 'order_id'),
        );
    }

    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'order_id']);
    }
}

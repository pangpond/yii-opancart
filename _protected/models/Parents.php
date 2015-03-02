<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_parents".
 *
 * @property integer $id
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property string $mobile
 * @property integer $email
 * @property string $created_at
 * @property string $updated_at
 */
class Parents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_parents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'firstname', 'lastname', 'mobile', 'email'], 'required'],
            [['email'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'firstname', 'lastname', 'mobile'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}

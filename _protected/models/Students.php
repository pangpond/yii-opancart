<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%students}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property string $code
 * @property string $dob
 * @property string $citizenid
 * @property integer $class_id
 * @property integer $room_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property SchoolRoom $room
 * @property SchoolClass $class
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%students}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'firstname', 'lastname', 'code', 'dob', 'citizenid', 'class_id', 'room_id'], 'required'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['class_id', 'room_id'], 'integer'],
            [['title', 'firstname', 'lastname', 'code'], 'string', 'max' => 255],
            [['citizenid'], 'string', 'max' => 32]
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
            'code' => 'Code',
            'dob' => 'Dob',
            'citizenid' => 'Citizenid',
            'class_id' => 'Class ID',
            'room_id' => 'Room ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
            'school_class' => array(self::BELONGS_TO, 'SchoolClass', 'id'),
        );
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(SchoolRoom::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(SchoolClass::className(), ['id' => 'class_id']);
    }
}

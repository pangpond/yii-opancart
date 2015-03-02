<?php

use yii\db\Schema;
use yii\db\Migration;

class m150302_011159_students extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') 
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%school_class}}', [
            'id' => Schema::TYPE_SMALLINT . ' AUTO_INCREMENT',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'PRIMARY KEY (id)',
        ], $tableOptions);

        $schoolClassData = array(
            array("id" => "1", "name" => "มัธยมศึกษาปีที่ 1"),
            array("id" => "2", "name" => "มัธยมศึกษาปีที่ 2"),
            array("id" => "3", "name" => "มัธยมศึกษาปีที่ 3"),
            array("id" => "4", "name" => "มัธยมศึกษาปีที่ 4"),
            array("id" => "5", "name" => "มัธยมศึกษาปีที่ 5"),
            array("id" => "6", "name" => "มัธยมศึกษาปีที่ 6"),
        );

        foreach ($schoolClassData as $schoolClass) {
            $this->insert('{{%school_class}}', $schoolClass);
        }

        $this->createTable('{{%school_room}}', [
            'id' => Schema::TYPE_SMALLINT . ' AUTO_INCREMENT',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'PRIMARY KEY (id)',
        ], $tableOptions);

        $schoolRoomData = array(
            array("id" => "1", "name" => "ห้อง 1"),
            array("id" => "2", "name" => "ห้อง 2"),
            array("id" => "3", "name" => "ห้อง 3"),
            array("id" => "4", "name" => "ห้อง 4"),
            array("id" => "5", "name" => "ห้อง 5"),
            array("id" => "6", "name" => "ห้อง 6"),
            array("id" => "7", "name" => "ห้อง 7"),
            array("id" => "8", "name" => "ห้อง 8"),
            array("id" => "9", "name" => "ห้อง 9"),
            array("id" => "10", "name" => "ห้อง 10"),
            array("id" => "11", "name" => "ห้อง 11"),
            array("id" => "12", "name" => "ห้อง 12"),
            array("id" => "13", "name" => "ห้อง 13"),
            array("id" => "14", "name" => "ห้อง 14"),
            array("id" => "15", "name" => "ห้อง 15"),
            array("id" => "16", "name" => "ห้อง 16"),
            array("id" => "17", "name" => "ห้อง 17"),
            array("id" => "18", "name" => "ห้อง 18"),
            array("id" => "19", "name" => "ห้อง 19"),
            array("id" => "20", "name" => "ห้อง 20"),
        );

        foreach ($schoolRoomData as $schoolRoom) {
            $this->insert('{{%school_room}}', $schoolRoom);
        }

        $this->createTable('{{%students}}', [
            'id' => Schema::TYPE_INTEGER . ' AUTO_INCREMENT',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'code' => Schema::TYPE_STRING . ' NOT NULL',
            'dob' => Schema::TYPE_DATE . ' NOT NULL',
            'citizenid' => Schema::TYPE_STRING . '(32) NOT NULL',
            'class_id' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'room_id' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
            'PRIMARY KEY (id)'
        ], $tableOptions);
        $this->createIndex('idx-student-citizen', '{{%students}}', 'citizenid');

        $this->createTable('{{%parents}}', [
            'id' => Schema::TYPE_PK . ' AUTO_INCREMENT',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'mobile' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME ,
        ], $tableOptions);


        // Add Foreign Keys Relations for RESERVED
        $this->addForeignKey("fk_students_class", "{{%students}}", "class_id", "{{%school_class}}", "id", "CASCADE", "RESTRICT");
        $this->addForeignKey("fk_students_room", "{{%students}}", "room_id", "{{%school_room}}", "id", "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropTable('{{%school_class}}');
        $this->dropTable('{{%school_room}}');
        $this->dropTable('{{%students}}');
        $this->dropTable('{{%parents}}');
    }
}

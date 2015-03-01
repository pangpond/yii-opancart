<?php

use yii\db\Schema;
use yii\db\Migration;

class m150227_063547_initial extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') 
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=MyISAM';
        }
        
        $this->createTable('{{%students}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'code' => Schema::TYPE_STRING . ' NOT NULL',
            'dob' => Schema::TYPE_DATE . ' NOT NULL',
            'citizenid' => Schema::TYPE_STRING . '(32) NOT NULL',
            'class_id' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'room_id' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'created_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%parents}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'mobile' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'created_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%school_class}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%school_room}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        // Add Foreign Keys Relations for RESERVED
        $this->addForeignKey("fk_students_class", "students", "class_id", "school_class", "id", "CASCADE", "RESTRICT");
        $this->addForeignKey("fk_students_room", "students", "room_id", "school_room", "id", "CASCADE", "RESTRICT");
    }

    public function down()
    {
        echo "m150227_063547_initial cannot be reverted.\n";

        return false;
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m181031_094317_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id'          => $this->primaryKey(),
            'first_name'  => $this->string(20),
            'middle_name' => $this->string(20),
            'last_name'   => $this->string(20),
            'birthday'    => $this->date(),
            'job_id'      => $this->integer(),
            'job_string'  => $this->string(50),
            'age'         => $this->integer(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%person}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `education`.
 */
class m181101_044201_create_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%education}}', [
            'id'         => $this->primaryKey(),
            'facility'   => $this->string()->notNull(),
            'profession' => $this->string()->notNull(),
            'person_id'  => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%education}}');
    }
}

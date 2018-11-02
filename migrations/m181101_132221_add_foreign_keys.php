<?php

use yii\db\Migration;

/**
 * Class m181101_132221_add_foreign_keys
 */
class m181101_132221_add_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk__education__person_id__person__id', 'education', 'person_id', 'person', 'id', 'CASCADE', 'NO ACTION');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk__education__person_id__person__id', 'education');

        return true;
    }
}

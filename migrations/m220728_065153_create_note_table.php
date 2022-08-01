<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%note}}`.
 */
class m220728_065153_create_note_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%note}}', [
            'id' => $this->primaryKey(),
            'lesson_id' => $this->integer(),
            'message' => $this->string()->notNull(),
            'created_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%note}}');
    }
}

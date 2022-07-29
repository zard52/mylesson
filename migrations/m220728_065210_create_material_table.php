<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material}}`.
 */
class m220728_065210_create_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material}}', [
            'id' => $this->primaryKey(),
            'lesson_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->string(),
        ]);

        // $this->addForeignKey('FK_lesson_id',
        // 'material', 'lesson_id','post', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material}}');
    }
}

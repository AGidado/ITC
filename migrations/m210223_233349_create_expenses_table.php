<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%expenses}}`.
 */
class m210223_233349_create_expenses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%expenses}}', [
            'id' => $this->primaryKey(),
            'expense_date'   => $this->date()->notNull(),
            'expense_value'  => $this->float()->notNull(),
            'expense_reason' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%expenses}}');
    }
}

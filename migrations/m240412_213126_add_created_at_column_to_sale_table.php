<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%sale}}`.
 */
class m240412_213126_add_created_at_column_to_sale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%sale}}', 'created_at', $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%sale}}', 'created_at');

    }
}

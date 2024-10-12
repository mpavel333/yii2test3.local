<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%books}}`.
 */
class m241012_150144_add_column_to_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('books', 'date', $this->date()->comment('Дата'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m241014_081143_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'name' => $this->string(),
            'date' => $this->date(),
        ]);
        
        $this->createIndex(
            'idx-books-author_id',
            'books',
            'author_id'
        );
                        
        $this->addForeignKey(
            'fk-books-author_id',
            'books',
            'author_id',
            'authors',
            'id',
            'SET NULL'
        );        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}

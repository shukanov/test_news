<?php

use yii\db\Migration;

/**
 * Class m210904_093316_create
 */
class m210904_093316_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'desc' => $this->string(),
            'content' => $this->text(),
            'image' => $this->string(),
            'elect' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210904_093316_create cannot be reverted.\n";

        return false;
    }
    */
}

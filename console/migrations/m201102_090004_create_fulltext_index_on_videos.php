<?php

use yii\db\Migration;

/**
 * Class m201102_090004_create_fulltext_index_on_videos
 */
class m201102_090004_create_fulltext_index_on_videos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%videos}} ADD FULLTEXT(title, description, tags)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201102_090004_create_fulltext_index_on_videos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201102_090004_create_fulltext_index_on_videos cannot be reverted.\n";

        return false;
    }
    */
}

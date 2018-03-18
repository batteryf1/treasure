<?php

use yii\db\Migration;

/**
 * Class m180318_230856_add_post_data
 */
class m180318_230856_add_post_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Добавляем новые категории через миграцию
        Yii::$app->db->createCommand()->batchInsert('article', ['title', 'keyword', 'description', 'content', 'category_id'], [
            ['Австралия', 'Австралия', 'Австралия', 'Австралия', 17],
            ['Австралия', 'Австралия', 'Австралия', 'Австралия', 18],
            ['Австралия', 'Австралия', 'Австралия', 'Австралия', 19],
            ['Австрия', 'Австрия', 'Австрия', 'Австрия', 18],
            ['Австрия', 'Австрия', 'Австрия', 'Австрия', 17],
            ['Австрия', 'Австрия', 'Австрия', 'Австрия', 20],
            ['Азербайджан', 'Азербайджан', 'Азербайджан', 'Азербайджан', 19],
            ['Азербайджан', 'Азербайджан', 'Азербайджан', 'Азербайджан', 17],
            ['Азербайджан', 'Азербайджан', 'Азербайджан', 'Азербайджан', 20],
            ['Албания', 'Албания', 'Албания', 'Албания', 20],
            ['Албания', 'Албания', 'Албания', 'Албания', 17],
            ['Албания', 'Албания', 'Албания', 'Албания', 18],
            ['Албания', 'Албания', 'Албания', 'Албания', 19],
            ['Азербайджан', 'Азербайджан', 'Азербайджан', 'Азербайджан', 18],
            ['Австрия', 'Австрия', 'Австрия', 'Австрия', 19],
            ['Австралия', 'Австралия', 'Австралия', 'Австралия', 20],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180318_230856_add_post_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180318_230856_add_post_data cannot be reverted.\n";

        return false;
    }
    */
}

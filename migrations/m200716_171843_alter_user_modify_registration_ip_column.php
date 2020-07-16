<?php

use yii\db\Migration;

/**
 * Class m200716_171843_alter_user_modify_registration_ip_column
 */
class m200716_171843_alter_user_modify_registration_ip_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table = \Yii::$app->getModule('user-management')->user_table;
        $this->alterColumn($table, 'registration_ip', 'varchar(40)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200716_171843_alter_user_modify_registration_ip_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200716_171843_alter_user_modify_registration_ip_column cannot be reverted.\n";

        return false;
    }
    */
}

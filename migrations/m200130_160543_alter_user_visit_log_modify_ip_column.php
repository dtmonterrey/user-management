<?php

use yii\db\Migration;

/**
 * Class m200130_160543_alter_user_visit_log_modify_ip_column
 */
class m200130_160543_alter_user_visit_log_modify_ip_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table = \Yii::$app->getModule('user-management')->user_visit_log_table;
        $this->alterColumn($table, 'ip', 'varchar(40) not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200130_160543_alter_user_visit_log_modify_ip_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200130_160543_alter_user_visit_log_modify_ip_column cannot be reverted.\n";

        return false;
    }
    */
}

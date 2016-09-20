<?php

use webvimark\modules\UserManagement\models\rbacDB\Permission;
use webvimark\modules\UserManagement\models\rbacDB\Route;
use yii\db\Migration;

class m160919_162800_insert_become_user_permission extends Migration
{
    public function safeUp()
    {
        Route::refreshRoutes(false);
        
        Permission::assignRoutes('becomeUser', [
			'/user-management/user/become-user',
		], 'Become someone', 'userManagement');
    }
    
    public function safeDown()
    {
        Permission::deleteAll(['name'=>['becomeUser']]);
    }
}
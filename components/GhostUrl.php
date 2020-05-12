<?php
namespace webvimark\modules\UserManagement\components;

use yii\helpers\BaseUrl;

class GhostUrl extends BaseUrl
{
    public static function getRoute($route)
    {
        return parent::normalizeRoute($route);
    }
}


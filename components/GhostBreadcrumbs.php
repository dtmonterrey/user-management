<?php
namespace webvimark\modules\UserManagement\components;

use webvimark\modules\UserManagement\models\User;
use yii\widgets\Breadcrumbs;

class GhostBreadcrumbs extends Breadcrumbs
{
    /**
     *
     * {@inheritDoc}
     * @see \yii\widgets\Breadcrumbs::renderItem()
     */
    protected function renderItem($link, $template)
    {
        if (isset($link['url'])) {
            $route = false;
            $url = $link['url'];
            if (is_array($url)) {
                $route = reset($url);
                if (sizeof(explode('/', $route)) < 2) {
                    $route = '/' . \Yii::$app->controller->id . '/' . $route;
                }
            } else if (is_string($url)) {
                return parent::renderItem($link, $template);
            } else {
                return parent::renderItem($link, $template);
            }
            // make sure route starts with /
            if (substr($route, 0, 1) !== '/') {
                $route = '/' . $route;
            }
            // check user can access route
            if ($route && !User::canRoute([$route])) {
                return '';
            }
        }
        
        return parent::renderItem($link, $template);
    }
}


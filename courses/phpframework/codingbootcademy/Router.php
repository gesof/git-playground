<?php
/**
 * @project: git-playground
 * @author: alexjorj
 * Date: 4/26/21
 * Time: 9:50 AM
 */

namespace codingbootcademy;


class Router
{
    private $routes = array(
        '/' => ['codingbootcademy\cms\controllers\Main', 'index', []],
        '/test/anothertest' => ['codingbootcademy\cms\controllers\Main', 'anotherTest', []],
        '/install' => ['codingbootcademy\cms\controllers\Main', 'install', []],
        '/aboutus' => ['codingbootcademy\cms\controllers\Main', 'aboutUs', []],
        '/contact' => ['codingbootcademy\cms\controllers\Main', 'contact', []],
    );

    /**
     * Router constructor.
     */
    public function __construct()
    {
    }

    public function match()
    {
        $ret = null;
        if(isset($this->routes[$_SERVER['REQUEST_URI']])) {
            return $this->routes[$_SERVER['REQUEST_URI']];
        }
        return $this->routes['/'];
    }
}

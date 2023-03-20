<?php

namespace PHPMVC\LIB;


class FrontController
{

    const NOT_FOUND_ACTION = 'notFoundAction';
    const NOT_FOUND_CONTROLLER = 'PHPMVC\Controllers\NotFoundController';


    private $_controller = 'index';
    private $_action = 'default';
    private $_params = array();

    private $_tempalte;
    private $_language;

    public function __construct(Template $template,Language $language)
    {
        $this->_tempalte = $template;
        $this->_language = $language;
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
        $url = explode('/', trim(str_replace('/index.php', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/'), 3);
        if (isset($url[0]) && $url[0] != '') {
            $this->_controller = $url[0];
        }
        if (isset($url[1]) && $url[1] != '') {
            $this->_action = $url[1];
        }
        if (isset($url[2]) && $url[1] != '') {
            $this->_params = explode('/', $url[2]);
        }
    }
    public function dispatch()
    {
        $controllerclassName = 'PHPMVC\Controllers\\' . ucfirst($this->_controller) . 'Controller';
        // var_dump(class_exists($controllerclassName));
        $actionName = $this->_action . 'Action';
        if (!class_exists($controllerclassName)) {
            $controllerclassName = self::NOT_FOUND_CONTROLLER;
        }

        $controller = new $controllerclassName();

        // var_dump($actionName);
        if (!method_exists($controller, $actionName)) {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }

        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->setTemplate($this->_tempalte);
        $controller->setLanguage($this->_language);
        // call action (view)
        $controller->$actionName();
        // var_dump($controller);
    }
}

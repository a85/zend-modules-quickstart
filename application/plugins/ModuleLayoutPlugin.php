<?php

class Application_Plugin_ModuleLayoutPlugin extends Zend_Controller_Plugin_Abstract
{
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
    {
        $front = Zend_Controller_Front::getInstance();
        $layout = Zend_Layout::getMvcInstance();

        $layoutDir = $front->getModuleDirectory() . '/layouts/scripts';
        $layout->setLayoutPath($layoutDir);
    }
}
<?php

class Blog_Bootstrap extends Zend_Application_Module_Bootstrap
{
    protected function _initModules()
    {
        $bootstrap = $this->getApplication();
        $bootstrap->bootstrap('frontcontroller');
        $front = $bootstrap->getResource('frontcontroller');

        $front->registerPlugin(new Blog_Plugin_InitPlugin());
    }
}


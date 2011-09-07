<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initFrontModules()
    {
        $this->bootstrap('frontController');
        Zend_Layout::startMvc();
    }
}


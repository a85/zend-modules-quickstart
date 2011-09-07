<?php

class Blog_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $environmentModel = new Api_Model_User();
        $environment = $environmentModel->getById('123');
        Zend_Debug::dump($environment);

        echo Zend_Registry::get("foo");
    }

    public function viewAction()
    {
        $this->_helper->layout->setLayout('admin');
    }


}
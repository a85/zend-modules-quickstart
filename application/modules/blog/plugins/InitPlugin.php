<?php
class Blog_Plugin_InitPlugin extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request) {
        Zend_Registry::set("foo", "bar");
    }
}
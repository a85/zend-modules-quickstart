<?php
class Api_Model_User extends Zend_Db_Table_Abstract
{
    protected $_name = 'environments';

    public function getById($id)
    {
        return "Test";
    }
}
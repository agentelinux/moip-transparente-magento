<?php

class O2TI_Onestepcheckout_Model_Mysql4_Onestepcheckout_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('onestepcheckout/onestepcheckout');
    }
}
<?php
namespace Hvendor\Customertable\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
// use Hvendor\Customertable\Model\Cus as CustomerModel;

class Cus extends AbstractDb{
    protected function _construct()
    {
        $this->_init("display_table","id");
        
    }

}
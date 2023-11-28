<?php

namespace Chandru\Checkcontent\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

// use Magento\Framework\Model\ResourceModel\AbstractResource;

class Admincutomer extends AbstractDb{



    protected function _construct()
    {
        $this->_init("customertable_admingrid","id");
    }
}
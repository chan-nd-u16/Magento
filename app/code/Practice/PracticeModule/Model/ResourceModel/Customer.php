<?php
namespace Practice\PracticeModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Customer extends AbstractDb{

    protected function _construct()
    {
        $this->_init("magento_practice","id");
    }
}
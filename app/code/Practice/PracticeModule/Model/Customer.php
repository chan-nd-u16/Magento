<?php
namespace Practice\PracticeModule\Model;

use Magento\Framework\Model\AbstractModel;
use Practice\PracticeModule\Model\ResourceModel\Customer as ResourceModelCustomer;

class Customer extends AbstractModel{


    protected function _construct()
    {
        $this->_init(ResourceModelCustomer::class);
    }
}
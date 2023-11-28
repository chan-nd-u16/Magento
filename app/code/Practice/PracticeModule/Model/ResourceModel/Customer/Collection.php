<?php

namespace Practice\PracticeModule\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Practice\PracticeModule\Model\Customer;
use Practice\PracticeModule\Model\ResourceModel\Customer as ResourceModelCustomer;

class Collection extends AbstractCollection{


    protected function _construct()
    {
        $this->_init(Customer::class,ResourceModelCustomer::class);
    }
}

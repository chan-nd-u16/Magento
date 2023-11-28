<?php
namespace Hvendor\Customertable\Model\ResourceModel\Cus;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hvendor\Customertable\Model\ResourceModel\Cus as ResourceModel;
use Hvendor\Customertable\Model\Cus as CustomerModel;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init(CustomerModel::class,ResourceModel::class);
    }
}
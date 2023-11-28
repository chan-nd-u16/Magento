<?php
namespace Hvendor\Modulevm\Model\ResourceModel\Customerdata;

use Hvendor\Modulevm\Model\Customerdata;
use Hvendor\Modulevm\Model\ResourceModel\Customerdata as ResourceModelCustomerdata;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init(Customerdata::class,ResourceModelCustomerdata::class);
    }
}
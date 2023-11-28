<?php
namespace Hvendor\Modulevm\Model;

use Hvendor\Modulevm\Model\ResourceModel\Customerdata as ResourceModelCustomerdata;
use Magento\Framework\Model\AbstractModel;


class Customerdata extends AbstractModel{
    protected function _construct()
    {
        $this->_init(ResourceModelCustomerdata::class);
    }
        

}
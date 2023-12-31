<?php


namespace Hvendor\Display\Model;

use Magento\Framework\Model\AbstractModel;
use Hvendor\Display\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
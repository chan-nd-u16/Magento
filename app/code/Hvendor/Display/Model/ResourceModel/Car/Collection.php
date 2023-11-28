<?php
namespace Hvendor\Display\Model\ResourceModel\Car;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hvendor\Display\Model\Car as Model;
use Hvendor\Display\Model\ResourceModel\Car as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
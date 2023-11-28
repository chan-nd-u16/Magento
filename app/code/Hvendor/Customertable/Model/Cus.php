<?php
namespace Hvendor\Customertable\Model;

use Magento\Framework\Model\AbstractModel;
use Hvendor\Customertable\Model\ResourceModel\Cus as ResourceModel;
// use Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModel as ProductResourceModel;

class Cus extends AbstractModel{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);

        
    }
}


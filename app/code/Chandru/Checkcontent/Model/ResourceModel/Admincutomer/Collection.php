<?php 


namespace Chandru\Checkcontent\Model\ResourceModel\Admincutomer;

// use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

use Chandru\Checkcontent\Model\Admincutomer;
use Chandru\Checkcontent\Model\ResourceModel\Admincutomer as ResourceModelAdmincutomer;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{


    protected function _construct()
    {
        $this->_init(Admincutomer::class,ResourceModelAdmincutomer::class);
    }
}
<?php

namespace Hvendor\Modulevm\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Customerdata extends AbstractDb{
    const TABLE_NAME="customertable_viewmodel";
    const ID_FIELD_NAME="id";
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME,self::ID_FIELD_NAME);
    }
}

<?php

namespace Adminvendor\Admingrid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

// use Magento\Framework\Model\ResourceModel\Db\VersionControl\AbstractDb;

class Post extends AbstractDb{


 protected function _construct()
 {
    $this->_init("Admingrid_post","post_id");
 }




}
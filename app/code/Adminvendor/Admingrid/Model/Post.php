<?php

namespace Adminvendor\Admingrid\Model;

use Adminvendor\Admingrid\Model\ResourceModel\Post as ResourceModelPost;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel{


 protected function _construct()
 {
    $this->_init(ResourceModelPost::class);
 }



}
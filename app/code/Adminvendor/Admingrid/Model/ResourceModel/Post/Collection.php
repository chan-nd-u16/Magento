<?php

namespace Adminvendor\Admingrid\Model\ResourceModel\Post;

use Adminvendor\Admingrid\Model\Post;
use Adminvendor\Admingrid\Model\ResourceModel\Post as ResourceModelPost;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
// use Magento\TestFramework\Db\AbstractDb;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init(Post::class,ResourceModelPost::class);
    }



}
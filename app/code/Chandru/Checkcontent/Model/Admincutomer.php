<?php

namespace Chandru\Checkcontent\Model;

use Chandru\Checkcontent\Model\ResourceModel\Admincutomer as ResourceModelAdmincutomer;
use Magento\Framework\Model\AbstractModel;

class Admincutomer extends AbstractModel{

    protected function _construct(){

       $this-> _init(ResourceModelAdmincutomer::class);
    }



}
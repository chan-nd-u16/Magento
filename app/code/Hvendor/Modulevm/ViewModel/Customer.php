<?php
namespace Hvendor\Modulevm\ViewModel;

use Hvendor\Modulevm\Model\ResourceModel\Customerdata\Collection;
use Magento\Framework\View\Element\Block\ArgumentInterface;


class Customer implements ArgumentInterface{
    protected $collection;
   
    public function __construct(
      Collection $collection
        
    ) {
        $this->collection = $collection;
    }
    public function getCustomer() {
        $customerObj = $this->collection;
        return $customerObj;
    }



}

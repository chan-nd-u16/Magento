<?php
namespace Practice\PracticeModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Practice\PracticeModule\Model\ResourceModel\Customer\Collection;

class Customer implements ArgumentInterface{
    private $collection;
    public function __construct(
        Collection $collection
    )
    {
        $this->collection=$collection;
    }

public function giveCollection(){

    return $this->collection;
}

}
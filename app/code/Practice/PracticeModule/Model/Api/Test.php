<?php
namespace Practice\PracticeModule\Model\Api;

use Practice\PracticeModule\Api\Testinterface;
use Practice\PracticeModule\Model\ResourceModel\Customer\Collection;

class Test implements Testinterface{
    private $collection;

    public function __construct(
        Collection $collection

    )
    {
        $this->collection=$collection;
    }

    public function getAllCus()
    {
       return $this->collection->getData();
    }
}
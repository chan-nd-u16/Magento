<?php
/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://jayanka.me/
 */

namespace Hvendor\Customertable\Block;

use Hvendor\Customertable\Model\ResourceModel\Cus\Collection;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;

class Add extends Template{
 private $collection;

    public function __construct(
        Context $context,
        Collection $collection,
        array $data=[]

    )
    {
        parent::__construct($context,$data);
        $this->collection=$collection;

        
    }
    public function getAllCustomers(){
        return $this->collection;
    }
    public function  getAddCustomerUrl(){
        return $this->getUrl("addcustomerdisplay\customer\customer");
    }
}
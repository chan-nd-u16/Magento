<?php

namespace Chandru\Checkcontent\Controller\Adminhtml\Create;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
// use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Add extends Action{

private $pageFactory;
const ADMIN_RESOURCE = 'Chandru_Checkcontent::faq_save';
public function __construct(
    PageFactory $pageFactory,
    Context $context
)
{ 
      parent::__construct($context);
    $this->pageFactory=$pageFactory;
    
}
public function execute()
{
    return $this->pageFactory->create();
}
    
}




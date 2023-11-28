<?php

namespace Practice\PracticeModule\Controller\index;

use Magento\Backend\App\Action\Context;
// use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;

class Indexx extends Action{
    private $pageFactory;
    public function __construct(
        PageFactory $pageFactory,
        Context $context
    )
    { parent::__construct($context);
       $this->pageFactory=$pageFactory;
    }
    public function execute()
    {
       $page=$this->pageFactory->create();
       return $page;
    }

}
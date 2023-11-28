<?php

namespace Hvendor\Modulevm\Controller\index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Updatepage extends Action{


    private $pageFactory;
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    )
    { parent::__construct($context);
      $this->pageFactory=$pageFactory;  
    }

    public function execute()
    {
        return $this->pageFactory->create();

    }
}
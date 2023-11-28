<?php

namespace Hvendor\Display\Controller\Factory;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Pgfactory implements HttpGetActionInterface{
    public function __construct(
        private PageFactory $pageFactory
    )
    {
        
    }
    public function execute()
    {
        return $this->pageFactory->create();
    }
}
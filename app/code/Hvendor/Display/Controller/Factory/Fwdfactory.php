<?php

namespace Hvendor\Display\Controller\Factory;

// use Magento\Backend\Model\View\Result\Forward;

// use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;

class Fwdfactory implements HttpGetActionInterface{
    public function __construct(
        private ForwardFactory $forwardFactory
    )
    {
        
    }
    public function execute():Forward
    {
        $forward=$this->forwardFactory->create();
        return $forward->setController('index')->forward('index');

    }
}
<?php

namespace Practice\PracticeModule\Controller\factory;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward as ResultForward;
use Magento\Framework\Controller\Result\ForwardFactory;


class Forward implements HttpGetActionInterface{

    private $forwardFactory;
    public function __construct(
        ForwardFactory $forwardFactory,
        // Context $context

    )
    {
        // parent::__construct($context);
        $this->forwardFactory=$forwardFactory;

    }
    public function execute():ResultForward
    {
        $forward=$this->forwardFactory->create();
        return $forward->setController('index')->forward('indexx');
        
    }
}
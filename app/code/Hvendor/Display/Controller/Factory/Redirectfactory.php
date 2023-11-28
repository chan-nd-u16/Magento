<?php

namespace Hvendor\Display\Controller\Factory;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory as ResultRedirectFactory;

class Redirectfactory implements HttpGetActionInterface{
    public function __construct(
        private ResultRedirectFactory $redirectFactory
    )
    {
        
    }
    public function execute():Redirect
    {
        $redirect=$this->redirectFactory->create();
        return $redirect->setPath('display/kanbon/kanbon');
    }
}
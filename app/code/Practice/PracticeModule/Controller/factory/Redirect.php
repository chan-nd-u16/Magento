<?php
namespace Practice\PracticeModule\Controller\factory;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect implements HttpGetActionInterface{
   private $redirectFactory;
   public function __construct(
    RedirectFactory $redirectFactory
   )
   {
    $this->redirectFactory=$redirectFactory;
   }
   public function execute()
   {
    $redirect=$this->redirectFactory->create();
    return $redirect->setUrl('http://chandru.magento.com/practice/index/indexx');
   }
}
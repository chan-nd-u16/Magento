<?php

namespace Hvendor\Modulevm\Controller\Crud;

use Hvendor\Modulevm\Model\Customerdata;
use Hvendor\Modulevm\Model\ResourceModel\Customerdata as ResourceModelCustomerdata;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Update extends Action{
    private $modeldata;
    private $resourcemodeldata;
   
    public function __construct(

        Context $context,
        Customerdata $modeldata,
        ResourceModelCustomerdata $resourcemodeldata
        
        
    )
    {
        parent::__construct($context);
        $this->modeldata=$modeldata;
        $this->resourcemodeldata=$resourcemodeldata;
    }
    public function execute()
    {   
        $data=$this->getRequest()->getParams();
        $user=$this->modeldata;
        $user->setData($data);

        try{
            $this->resourcemodeldata->save($user);
            $this->messageManager->addSuccessMessage("Details updated sucessfully");
           
            

        }catch(\Exception $exception){
            $this->messageManager->addErrorMessage("Error in updating Details");



        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('viewmodule');
        return $redirect;
       
        
    }
}

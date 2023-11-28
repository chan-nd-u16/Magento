<?php
namespace Practice\PracticeModule\Controller\crud;

// use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
// use Magento\Framework\Setup\Exception;
// use PhpParser\Node\Stmt\Catch_;
use Magento\Framework\App\Action\Context;
use Practice\PracticeModule\Model\Customer;
use Practice\PracticeModule\Model\ResourceModel\Customer as ResourceModelCustomer;
use Magento\Framework\App\ResponseInterface;

class Add extends Action{
    private $model;
    private $resmodel;

    public function __construct(
        Customer $model,
        ResourceModelCustomer $resmodel,
        Context $context
        
        
    )
    {
    parent::__construct($context);
        $this->model=$model;
        $this->resmodel=$resmodel;
        
    }
     /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {

        $data=$this->getRequest()->getParams();
        $mod=$this->model;
        $mod->setData($data);
        try{

            
            $this->resmodel->save($mod);
            $this->messageManager->addSuccessMessage('Data Added successfully');
        }
        catch(\Exception $e){
             $this->messageManager->addErrorMessage('error in saving Details');
        }
        $redirect=$this->resultRedirectFactory->create();
        $redirect->setPath('practice/index/indexx');
        return $redirect;



        
    }
}